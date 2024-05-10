class Main {
    public static void main(String[] args) {
        vehical n1 = new vehical();
        n1.dis1();
        car n2 = new car();
        n2.dis1();// <<<<<<<<<<<<
        n2.dis2();
    }
}

// parent class
class vehical {
    public String vehicaltype;

    public void dis1() {
        vehicaltype = "car";
        System.out.println("vehical is:" + vehicaltype);
    }
}

// child class
class car extends vehical {
    public String model;

    public void dis2() {
        model = "R-34";
        System.out.println("model is:" + model);
    }
}
