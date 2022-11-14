<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20191111\Models;

use AlibabaCloud\Tea\Model;

class GetAsyncPredictRequest extends Model
{
    /**
     * @var int
     */
    public $asyncPredictId;
    protected $_name = [
        'asyncPredictId' => 'AsyncPredictId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asyncPredictId) {
            $res['AsyncPredictId'] = $this->asyncPredictId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAsyncPredictRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsyncPredictId'])) {
            $model->asyncPredictId = $map['AsyncPredictId'];
        }

        return $model;
    }
}
