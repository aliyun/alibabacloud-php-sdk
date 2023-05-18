<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;

class RecognizeSocialSecurityCardResponseBody extends Model
{
    /**
     * @example noPermission
     *
     * @var string
     */
    public $code;

    /**
     * @example {"angle":0,"data":{"issueDate":"20168月4日","certificateNumber":"2014100285","taxAuthorityName":"格","formType":"第一联","taxNumbe":"","name":"","totalAmountInWords":"肆佰陆拾陆元叁角玖分","totalAmount":"466.39","drawer":"","remarks":"(20141)鄂国证00285001正常申报一般申报滞纳金自行申报松滋市街河市镇现:主管税务所(科、分局):松滋市国家税务局办税服票价格:4615.38、车辆厂牌:铃木牌/SUZUKIHJ125K-车辆型号:铃木牌/SUZUKIHJ125K-2A、车辆识别代号:LC6PCJ2Y5F1014537","taxClearanceDetails":[{"voucherNumber":"320160804000005082","taxType":"车辆购置税","itemName":"车辆购置税","taxPeriod":"2016-08-04至2016-08-04","date":"2016-08-04461.54","amount":""},{"voucherNumber":"320160804000005082","taxType":"车辆购置税","itemName":"滞纳金","taxPeriod":"2016-08-04至2016-08-04","date":"2016-08-044.85","amount":""}]},"ftype":0,"height":712,"orgHeight":712,"orgWidth":1080,"prism_keyValueInfo":[{"key":"issueDate","keyProb":100,"value":"20168月4日","valuePos":[{"x":458,"y":129},{"x":458,"y":110},{"x":639,"y":113},{"x":638,"y":131}],"valueProb":100},{"key":"certificateNumber","keyProb":99,"value":"2014100285","valuePos":[{"x":810,"y":87},{"x":997,"y":83},{"x":997,"y":103},{"x":810,"y":106}],"valueProb":99},{"key":"taxAuthorityName","keyProb":87,"value":"格","valuePos":[{"x":840,"y":103},{"x":840,"y":128},{"x":825,"y":128},{"x":825,"y":103}],"valueProb":87},{"key":"formType","keyProb":100,"value":"第一联","valuePos":[{"x":1036,"y":247},{"x":1051,"y":247},{"x":1051,"y":289},{"x":1036,"y":289}],"valueProb":100},{"key":"taxNumbe","keyProb":100,"value":"","valueProb":100},{"key":"name","keyProb":100,"value":"","valueProb":100},{"key":"totalAmountInWords","keyProb":100,"value":"肆佰陆拾陆元叁角玖分","valuePos":[{"x":239,"y":498},{"x":395,"y":496},{"x":395,"y":514},{"x":239,"y":515}],"valueProb":100},{"key":"totalAmount","keyProb":100,"value":"466.39","valuePos":[{"x":892,"y":494},{"x":957,"y":493},{"x":957,"y":508},{"x":893,"y":510}],"valueProb":100},{"key":"drawer","keyProb":100,"value":"","valueProb":100},{"key":"remarks","keyProb":100,"value":"(20141)鄂国证00285001正常申报一般申报滞纳金自行申报松滋市街河市镇现:主管税务所(科、分局):松滋市国家税务局办税服票价格:4615.38、车辆厂牌:铃木牌/SUZUKIHJ125K-车辆型号:铃木牌/SUZUKIHJ125K-2A、车辆识别代号:LC6PCJ2Y5F1014537","valuePos":[{"x":966,"y":538},{"x":966,"y":663},{"x":610,"y":663},{"x":610,"y":538}],"valueProb":100},{"key":"taxClearanceDetails","keyProb":100,"value":"[{\"voucherNumber\":\"320160804000005082\",\"taxType\":\"车辆购置税\",\"itemName\":\"车辆购置税\",\"taxPeriod\":\"2016-08-04至2016-08-04\",\"date\":\"2016-08-04461.54\",\"amount\":\"\"},{\"voucherNumber\":\"320160804000005082\",\"taxType\":\"车辆购置税\",\"itemName\":\"滞纳金\",\"taxPeriod\":\"2016-08-04至2016-08-04\",\"date\":\"2016-08-044.85\",\"amount\":\"\"}]","valueProb":100}],"sliceRect":{"x0":0,"y0":0,"x1":1077,"y1":0,"x2":1078,"y2":709,"x3":0,"y3":704},"width":1080}
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
     * @return RecognizeSocialSecurityCardResponseBody
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
