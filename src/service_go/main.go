package main

import (
	"fmt"
	"net/http"
	"time"
	"log"
)

func HelloServer(w http.ResponseWriter, req *http.Request) {
	time.Sleep(1 * time.Second)
	fmt.Fprint(w, "ok")
}
func main() {
	http.HandleFunc("/", HelloServer)
	err := http.ListenAndServe("0.0.0.0:3000", nil)
	if err != nil {
		log.Fatal("ListenAndServe: ", err.Error())
	}
}
