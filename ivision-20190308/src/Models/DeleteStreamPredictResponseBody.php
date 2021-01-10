<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivision\V20190308\Models;

use AlibabaCloud\Tea\Model;

class DeleteStreamPredictResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $predictId;
    protected $_name = [
        'requestId' => 'RequestId',
        'predictId' => 'PredictId',
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
        if (null !== $this->predictId) {
            $res['PredictId'] = $this->predictId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteStreamPredictResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PredictId'])) {
            $model->predictId = $map['PredictId'];
        }

        return $model;
    }
}
