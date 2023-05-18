<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;

class RecognizeChinesePassportResponseBody extends Model
{
    /**
     * @example noPermission
     *
     * @var string
     */
    public $code;

    /**
     * @example {"data":{"passportType":"P","countryCode":"CHN","passportNumber":"E90000082","nameEn":",ZHENGJIANGANGUX","name":"","sex":"3.7F","birthPlace":"北京/BEIJIHG","nationality":"","issuePlace":"山东/SHANDON","issueAuthority":"公安部出入境管理局","mrzLine1":"POCHNZHENGJIAN<<YANGBEN<<<<<<<<<<<<<<<<<<<<<","mrzLine2":"E900000821CHN8108038F2110189NGKELMPONBPJB978","validToDate":"2921.DCF.3B","birthDate":"08.1981","issueDate":"91.1010.19"},"ftype":0,"height":186,"orgHeight":186,"orgWidth":271,"prism_keyValueInfo":[{"key":"passportType","keyProb":100,"value":"P","valuePos":[{"x":93,"y":26},{"x":93,"y":33},{"x":87,"y":33},{"x":87,"y":26}],"valueProb":100},{"key":"countryCode","keyProb":92,"value":"CHN","valuePos":[{"x":143,"y":26},{"x":143,"y":33},{"x":126,"y":33},{"x":126,"y":26}],"valueProb":92},{"key":"passportNumber","keyProb":100,"value":"E90000082","valuePos":[{"x":173,"y":29},{"x":230,"y":28},{"x":230,"y":35},{"x":174,"y":37}],"valueProb":100},{"key":"nameEn","keyProb":87,"value":",ZHENGJIANGANGUX","valuePos":[{"x":88,"y":55},{"x":89,"y":48},{"x":166,"y":49},{"x":166,"y":57}],"valueProb":87},{"key":"name","keyProb":100,"value":"","valueProb":100},{"key":"sex","keyProb":99,"value":"3.7F","valuePos":[{"x":103,"y":67},{"x":103,"y":74},{"x":87,"y":74},{"x":87,"y":67}],"valueProb":99},{"key":"birthPlace","keyProb":98,"value":"北京/BEIJIHG","valuePos":[{"x":133,"y":83},{"x":133,"y":91},{"x":87,"y":91},{"x":87,"y":83}],"valueProb":98},{"key":"nationality","keyProb":100,"value":"","valueProb":100},{"key":"issuePlace","keyProb":99,"value":"山东/SHANDON","valuePos":[{"x":136,"y":100},{"x":136,"y":108},{"x":88,"y":108},{"x":88,"y":100}],"valueProb":99},{"key":"issueAuthority","keyProb":79,"value":"公安部出入境管理局","valuePos":[{"x":87,"y":118},{"x":142,"y":118},{"x":142,"y":125},{"x":87,"y":125}],"valueProb":79},{"key":"mrzLine1","keyProb":100,"value":"POCHNZHENGJIAN<<YANGBEN<<<<<<<<<<<<<<<<<<<<<","valuePos":[{"x":12,"y":153},{"x":252,"y":152},{"x":252,"y":159},{"x":12,"y":161}],"valueProb":100},{"key":"mrzLine2","keyProb":99,"value":"E900000821CHN8108038F2110189NGKELMPONBPJB978","valuePos":[{"x":11,"y":166},{"x":253,"y":165},{"x":253,"y":173},{"x":12,"y":175}],"valueProb":99},{"key":"validToDate","keyProb":60,"value":"2921.DCF.3B","valuePos":[{"x":170,"y":107},{"x":171,"y":99},{"x":226,"y":101},{"x":225,"y":108}],"valueProb":86},{"key":"birthDate","keyProb":100,"value":"08.1981","valuePos":[{"x":209,"y":67},{"x":209,"y":74},{"x":181,"y":74},{"x":181,"y":67}],"valueProb":99},{"key":"issueDate","keyProb":82,"value":"91.1010.19","valuePos":[{"x":226,"y":83},{"x":226,"y":90},{"x":170,"y":90},{"x":170,"y":83}],"valueProb":84}],"sliceRect":{"x0":1,"y0":1,"x1":269,"y1":1,"x2":269,"y2":184,"x3":1,"y3":183},"width":271}
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
     * @return RecognizeChinesePassportResponseBody
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
