<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models;

use AlibabaCloud\Tea\Model;

class RecognizeKoreanResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example {"content":"위 기자재는 [전파법] 제58조의2 제3항에 따라 등록되었음을 증명합니다.  Itis verified thatforegoing equipment has bee en registered underthe Clause 3, Article 58-2 of Radio Waves Act.  y0 13년(Year)_08월(Month) 16일(Date) 국립전 파연구 국립전파연7 구원장 인 Dlrector General ofNatlonal Radio Research Agency    적합등록 방송통신기자재는 반드시\\"적합성평가표: .시\\"를 부착하여 유통하여야 합니다.  위반시 과태료 처분 및등록이 취소될 수 있습니다.  ","height":499,"orgHeight":499,"orgWidth":1153,"prism_version":"1.0.9","prism_wnum":19,"prism_wordsInfo":[{"angle":-90,"direction":0,"height":587,"pos":[{"x":61,"y":18},{"x":647,"y":16},{"x":647,"y":43},{"x":61,"y":45}],"prob":98,"width":27,"word":"위 기자재는 [전파법] 제58조의2 제3항에 따라","x":341,"y":-263}],"width":1153}
     *
     * @var string
     */
    public $data;

    /**
     * @example message
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
     * @return RecognizeKoreanResponseBody
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
