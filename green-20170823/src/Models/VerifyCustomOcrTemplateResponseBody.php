<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class VerifyCustomOcrTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $recognizeInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageUrl'      => 'ImageUrl',
        'recognizeInfo' => 'RecognizeInfo',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->recognizeInfo) {
            $res['RecognizeInfo'] = $this->recognizeInfo;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyCustomOcrTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['RecognizeInfo'])) {
            $model->recognizeInfo = $map['RecognizeInfo'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
