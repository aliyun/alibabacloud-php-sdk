<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;

class RecognizeExitEntryPermitToHKResponseBody extends Model
{
    /**
     * @example noPermission
     *
     * @var string
     */
    public $code;

    /**
     * @example {"data":{"permitType":"往来港澳通行证","nameCn":"朱伟","nameEn":"ZHU,WEI","birthDate":"2021.01.01","sex":"男","validPeriod":"2018.06.11-2028.06.10","issueAuthority":"公安部出入境管理局","issuePlace":"江苏","permitNumber":"C88600000","mrzCode":"CSC886084772<2800800<8200000<6"},"figure":[{"type":"face","x":160,"y":271,"w":190,"h":248,"box":{"x":254,"y":394,"w":186,"h":244,"angle":0},"points":[{"x":160,"y":272},{"x":347,"y":271},{"x":348,"y":516},{"x":161,"y":517}]},{"type":"face","x":711,"y":355,"w":80,"h":103,"box":{"x":750,"y":405,"w":75,"h":99,"angle":-1},"points":[{"x":711,"y":357},{"x":787,"y":355},{"x":789,"y":454},{"x":713,"y":456}]}],"ftype":0,"height":692,"orgHeight":692,"orgWidth":1024,"prism_keyValueInfo":[{"key":"permitType","keyProb":100,"value":"往来港澳通行证","valuePos":[{"x":142,"y":39},{"x":476,"y":35},{"x":477,"y":75},{"x":142,"y":79}],"valueProb":100},{"key":"nameCn","keyProb":100,"value":"朱伟","valuePos":[{"x":272,"y":126},{"x":346,"y":124},{"x":347,"y":160},{"x":272,"y":161}],"valueProb":100},{"key":"nameEn","keyProb":100,"value":"ZHU,WEI","valuePos":[{"x":273,"y":168},{"x":403,"y":167},{"x":403,"y":194},{"x":274,"y":196}],"valueProb":100},{"key":"birthDate","keyProb":100,"value":"2021.01.01","valuePos":[{"x":421,"y":240},{"x":421,"y":269},{"x":281,"y":269},{"x":281,"y":240}],"valueProb":100},{"key":"sex","keyProb":100,"value":"男","valuePos":[{"x":502,"y":240},{"x":502,"y":270},{"x":474,"y":270},{"x":474,"y":240}],"valueProb":100},{"key":"validPeriod","keyProb":100,"value":"2018.06.11-2028.06.10","valuePos":[{"x":579,"y":301},{"x":579,"y":328},{"x":275,"y":328},{"x":275,"y":301}],"valueProb":100},{"key":"issueAuthority","keyProb":100,"value":"公安部出入境管理局","valuePos":[{"x":278,"y":361},{"x":524,"y":361},{"x":524,"y":391},{"x":278,"y":391}],"valueProb":100},{"key":"issuePlace","keyProb":100,"value":"江苏","valuePos":[{"x":619,"y":361},{"x":619,"y":391},{"x":561,"y":391},{"x":561,"y":361}],"valueProb":100},{"key":"permitNumber","keyProb":100,"value":"C88600000","valuePos":[{"x":524,"y":61},{"x":727,"y":60},{"x":728,"y":92},{"x":524,"y":94}],"valueProb":100},{"key":"mrzCode","keyProb":98,"value":"CSC886084772<2800800<8200000<6","valuePos":[{"x":714,"y":421},{"x":714,"y":449},{"x":65,"y":449},{"x":65,"y":421}],"valueProb":98}],"sliceRect":{"x0":107,"y0":135,"x1":880,"y1":134,"x2":874,"y2":616,"x3":117,"y3":624},"width":1024}
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
     * @example C99EABB8-9FCB-5E5E-B4D9-AFCFA6C8B3FD
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
     * @return RecognizeExitEntryPermitToHKResponseBody
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
