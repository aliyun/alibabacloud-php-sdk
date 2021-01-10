<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class DiagnosisVersionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $diagnosisResult;
    protected $_name = [
        'requestId'       => 'RequestId',
        'diagnosisResult' => 'DiagnosisResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->diagnosisResult) {
            $res['DiagnosisResult'] = $this->diagnosisResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DiagnosisVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DiagnosisResult'])) {
            $model->diagnosisResult = $map['DiagnosisResult'];
        }

        return $model;
    }
}
