<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;

class RecognizeVehicleRegistrationResponseBody extends Model
{
    /**
     * @example noPermission
     *
     * @var string
     */
    public $code;

    /**
     * @example {"codes":[{"data":"310007798232","points":[{"x":502,"y":6},{"x":768,"y":6},{"x":768,"y":52},{"x":502,"y":52}],"type":"Codabar"}],"data":{"barCode":"310007798232","vehicleOwnerInfo":"某某某限有限公司/统一社会信用代码/12345678682296194","registrationAuthority":"上海市公安局交通警察总队车辆管理所","registrationDate":"2021-04-28","registrationNumber":"沪AG12345","vehicleType":"小型轿车","vehicleBrand":"大众汽车牌","vehicleModel":"SVW7142BPV","vehicleColor":"","vinCode":"LSVCY6C49MN027789","isDomestic":"国产","engineNumber":"035154","engineType":"DUK","fuelType":"混合动力","displacement":"1395","power":"110","manufactureName":"上汽大众汽车有限公司","steeringForm":"方向盘","frontWheelTrack":"1584","rearWheelTrack":"1570","tireNumber":"4","tireSize":"215/60R1695V","springNumber":"","wheelbase":"2871","axleNumber":"2","overallDimension":"4948×1836×1469","containerDimension":"","totalWeight":"2190","permittedWeight":"","passengerCapacity":"","tractionWeight":"","cabPassengerCapacity":"","useNature":"租赁","acquisitionMethod":"购买","manufactureDate":"2021-03-16","issueAuthority":"上海市公安局交通警察总队","issueDate":"2021-04-28"},"ftype":0,"height":1125,"orgHeight":1125,"orgWidth":844,"prism_keyValueInfo":[{"key":"barCode","keyProb":96,"value":"310007798232","valuePos":[{"x":545,"y":45},{"x":735,"y":42},{"x":736,"y":53},{"x":545,"y":55}],"valueProb":96},{"key":"vehicleOwnerInfo","keyProb":100,"value":"某某某限有限公司/统一社会信用代码/12345678682296194","valuePos":[{"x":317,"y":70},{"x":723,"y":68},{"x":723,"y":84},{"x":318,"y":87}],"valueProb":100},{"key":"registrationAuthority","keyProb":100,"value":"上海市公安局交通警察总队车辆管理所","valuePos":[{"x":165,"y":89},{"x":369,"y":87},{"x":370,"y":112},{"x":166,"y":114}],"valueProb":100},{"key":"registrationDate","keyProb":100,"value":"2021-04-28","valuePos":[{"x":463,"y":93},{"x":538,"y":92},{"x":538,"y":104},{"x":464,"y":106}],"valueProb":100},{"key":"registrationNumber","keyProb":100,"value":"沪AG12345","valuePos":[{"x":733,"y":93},{"x":733,"y":107},{"x":669,"y":107},{"x":669,"y":93}],"valueProb":100},{"key":"vehicleType","keyProb":84,"value":"小型轿车","valuePos":[{"x":262,"y":588},{"x":262,"y":603},{"x":205,"y":603},{"x":205,"y":588}],"valueProb":84},{"key":"vehicleBrand","keyProb":100,"value":"大众汽车牌","valuePos":[{"x":569,"y":606},{"x":570,"y":592},{"x":643,"y":594},{"x":642,"y":608}],"valueProb":100},{"key":"vehicleModel","keyProb":99,"value":"SVW7142BPV","valuePos":[{"x":277,"y":616},{"x":277,"y":630},{"x":206,"y":630},{"x":206,"y":616}],"valueProb":99},{"key":"vehicleColor","keyProb":77,"value":"","valuePos":[{"x":585,"y":620},{"x":585,"y":635},{"x":569,"y":635},{"x":569,"y":620}],"valueProb":77},{"key":"vinCode","keyProb":100,"value":"LSVCY6C49MN027789","valuePos":[{"x":324,"y":645},{"x":324,"y":659},{"x":204,"y":659},{"x":204,"y":645}],"valueProb":100},{"key":"isDomestic","keyProb":96,"value":"国产","valuePos":[{"x":568,"y":662},{"x":569,"y":649},{"x":599,"y":650},{"x":599,"y":664}],"valueProb":96},{"key":"engineNumber","keyProb":100,"value":"035154","valuePos":[{"x":203,"y":686},{"x":204,"y":671},{"x":250,"y":672},{"x":250,"y":688}],"valueProb":100},{"key":"engineType","keyProb":100,"value":"DUK","valuePos":[{"x":594,"y":678},{"x":594,"y":692},{"x":568,"y":692},{"x":568,"y":678}],"valueProb":100},{"key":"fuelType","keyProb":100,"value":"混合动力","valuePos":[{"x":260,"y":702},{"x":260,"y":717},{"x":204,"y":717},{"x":204,"y":702}],"valueProb":100},{"key":"displacement","keyProb":100,"value":"1395","valuePos":[{"x":600,"y":707},{"x":600,"y":722},{"x":569,"y":722},{"x":569,"y":707}],"valueProb":100},{"key":"power","keyProb":100,"value":"110","valuePos":[{"x":687,"y":708},{"x":687,"y":723},{"x":663,"y":723},{"x":663,"y":708}],"valueProb":100},{"key":"manufactureName","keyProb":100,"value":"上汽大众汽车有限公司","valuePos":[{"x":342,"y":731},{"x":342,"y":746},{"x":205,"y":746},{"x":205,"y":731}],"valueProb":100},{"key":"steeringForm","keyProb":100,"value":"方向盘","valueProb":100},{"key":"frontWheelTrack","keyProb":100,"value":"1584","valuePos":[{"x":252,"y":760},{"x":252,"y":774},{"x":222,"y":774},{"x":222,"y":760}],"valueProb":100},{"key":"rearWheelTrack","keyProb":100,"value":"1570","valuePos":[{"x":370,"y":761},{"x":370,"y":775},{"x":340,"y":775},{"x":340,"y":761}],"valueProb":100},{"key":"tireNumber","keyProb":100,"value":"4","valuePos":[{"x":580,"y":766},{"x":580,"y":781},{"x":568,"y":781},{"x":568,"y":766}],"valueProb":100},{"key":"tireSize","keyProb":100,"value":"215/60R1695V","valuePos":[{"x":302,"y":788},{"x":302,"y":803},{"x":203,"y":803},{"x":203,"y":788}],"valueProb":100},{"key":"springNumber","keyProb":100,"value":"","valueProb":100},{"key":"wheelbase","keyProb":100,"value":"2871","valuePos":[{"x":232,"y":817},{"x":232,"y":831},{"x":202,"y":831},{"x":202,"y":817}],"valueProb":100},{"key":"axleNumber","keyProb":92,"value":"2","valuePos":[{"x":578,"y":825},{"x":578,"y":839},{"x":569,"y":839},{"x":569,"y":825}],"valueProb":92},{"key":"overallDimension","keyProb":100,"value":"4948×1836×1469","valuePos":[{"x":221,"y":857},{"x":222,"y":845},{"x":475,"y":850},{"x":474,"y":862}],"valueProb":100},{"key":"containerDimension","keyProb":100,"value":"","valueProb":100},{"key":"totalWeight","keyProb":100,"value":"2190","valuePos":[{"x":232,"y":904},{"x":232,"y":918},{"x":203,"y":918},{"x":203,"y":904}],"valueProb":100},{"key":"permittedWeight","keyProb":100,"value":"","valueProb":100},{"key":"passengerCapacity","keyProb":100,"value":"","valueProb":100},{"key":"tractionWeight","keyProb":100,"value":"","valueProb":100},{"key":"cabPassengerCapacity","keyProb":100,"value":"","valueProb":100},{"key":"useNature","keyProb":97,"value":"租赁","valuePos":[{"x":487,"y":968},{"x":487,"y":984},{"x":457,"y":984},{"x":457,"y":968}],"valueProb":97},{"key":"acquisitionMethod","keyProb":100,"value":"购买","valuePos":[{"x":230,"y":992},{"x":230,"y":1008},{"x":200,"y":1008},{"x":200,"y":992}],"valueProb":100},{"key":"manufactureDate","keyProb":100,"value":"2021-03-16","valuePos":[{"x":455,"y":1012},{"x":456,"y":999},{"x":529,"y":1000},{"x":529,"y":1013}],"valueProb":100},{"key":"issueAuthority","keyProb":100,"value":"上海市公安局交通警察总队","valuePos":[{"x":684,"y":895},{"x":684,"y":980},{"x":599,"y":980},{"x":599,"y":895}],"valueProb":100},{"key":"issueDate","keyProb":100,"value":"2021-04-28","valuePos":[{"x":642,"y":1018},{"x":642,"y":1002},{"x":719,"y":1007},{"x":718,"y":1022}],"valueProb":100}],"sliceRect":{"x0":23,"y0":44,"x1":795,"y1":38,"x2":793,"y2":1124,"x3":12,"y3":1106},"width":844}
     *
     * @var string
     */
    public $data;

    /**
     * @example You are not authorized to perform this operation.
     *
     * @var string
     */
    public $message;

    /**
     * @example 43A29C77-405E-4CC0-BC55-EE694AD00655
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeVehicleRegistrationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
