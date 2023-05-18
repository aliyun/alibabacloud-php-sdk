<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;

class RecognizeExitEntryPermitToMainlandResponseBody extends Model
{
    /**
     * @example noPermission
     *
     * @var string
     */
    public $code;

    /**
     * @example {"data":{"permitType":"港澳居民来往内地通行证","nameCn":"何郑","nameEn":"HE,CHENG","birthDate":"2000.01.01","sex":"男","validPeriod":"2014.04.10-2019.04.09","issueAuthority":"公安部出入境管理局","issuePlace":"","permitNumber":"H10387877","issueCount":"01"},"figure":[{"type":"face","x":80,"y":164,"w":192,"h":273,"box":{"x":175,"y":300,"w":187,"h":269,"angle":0},"points":[{"x":80,"y":166},{"x":268,"y":164},{"x":270,"y":433},{"x":82,"y":435}]}],"ftype":0,"height":626,"orgHeight":626,"orgWidth":928,"prism_keyValueInfo":[{"key":"permitType","keyProb":100,"value":"港澳居民来往内地通行证","valuePos":[{"x":680,"y":41},{"x":681,"y":83},{"x":177,"y":86},{"x":176,"y":44}],"valueProb":100},{"key":"nameCn","keyProb":100,"value":"何郑","valuePos":[{"x":346,"y":119},{"x":346,"y":153},{"x":269,"y":153},{"x":269,"y":119}],"valueProb":100},{"key":"nameEn","keyProb":100,"value":"HE,CHENG","valuePos":[{"x":452,"y":166},{"x":452,"y":195},{"x":270,"y":195},{"x":270,"y":166}],"valueProb":100},{"key":"birthDate","keyProb":100,"value":"2000.01.01","valuePos":[{"x":273,"y":226},{"x":414,"y":226},{"x":414,"y":254},{"x":273,"y":254}],"valueProb":100},{"key":"sex","keyProb":100,"value":"男","valuePos":[{"x":594,"y":234},{"x":594,"y":268},{"x":562,"y":268},{"x":562,"y":234}],"valueProb":100},{"key":"validPeriod","keyProb":100,"value":"2014.04.10-2019.04.09","valuePos":[{"x":700,"y":295},{"x":700,"y":323},{"x":267,"y":324},{"x":267,"y":296}],"valueProb":100},{"key":"issueAuthority","keyProb":100,"value":"公安部出入境管理局","valuePos":[{"x":264,"y":386},{"x":265,"y":353},{"x":536,"y":357},{"x":536,"y":390}],"valueProb":100},{"key":"issuePlace","keyProb":100,"value":"","valueProb":100},{"key":"permitNumber","keyProb":100,"value":"H10387877","valuePos":[{"x":489,"y":424},{"x":489,"y":457},{"x":268,"y":457},{"x":268,"y":424}],"valueProb":100},{"key":"issueCount","keyProb":100,"value":"01","valuePos":[{"x":601,"y":425},{"x":601,"y":456},{"x":555,"y":456},{"x":555,"y":425}],"valueProb":100}],"sliceRect":{"x0":46,"y0":30,"x1":887,"y1":38,"x2":892,"y2":564,"x3":39,"y3":567},"width":928}
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
     * @return RecognizeExitEntryPermitToMainlandResponseBody
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
