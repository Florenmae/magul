graph = {
 "A": ["D", "B"],
 "B": ["C", "E", "G"],
 "C": ["A"],
 "D": ["C"],
 "E": ["F"],
 "F": ["I"],
 "G": ["H", "J"],
 "H": ["F", "I"],
 "I": [],
 "J": []
}

visited = []
queue = []

def bfs(visited, graph, node):
    visited.append(node)
    queue.append(node)

    while queue:
        m = queue.pop(0)
        print (m, end = " ")

        for neigbhor in graph[m]:
            if neigbhor not in visited:
                visited.append(neigbhor)
                queue.append(neigbhor)

print("BFS Traversal")
bfs(visited, graph, 'A')