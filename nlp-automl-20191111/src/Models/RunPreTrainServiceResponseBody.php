<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20191111\Models;

use AlibabaCloud\Tea\Model;

class RunPreTrainServiceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $predictResult;
    protected $_name = [
        'requestId'     => 'RequestId',
        'predictResult' => 'PredictResult',
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
        if (null !== $this->predictResult) {
            $res['PredictResult'] = $this->predictResult;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunPreTrainServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PredictResult'])) {
            $model->predictResult = $map['PredictResult'];
        }

        return $model;
    }
}
