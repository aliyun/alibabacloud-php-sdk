<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Tea\Model;

class CreateModelFeatureResponseBody extends Model
{
    /**
     * @example 3
     *
     * @var string
     */
    public $modelFeatureId;

    /**
     * @example 37D19490-AB69-567D-A852-407C94E510E9
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'modelFeatureId' => 'ModelFeatureId',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modelFeatureId) {
            $res['ModelFeatureId'] = $this->modelFeatureId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateModelFeatureResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModelFeatureId'])) {
            $model->modelFeatureId = $map['ModelFeatureId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
