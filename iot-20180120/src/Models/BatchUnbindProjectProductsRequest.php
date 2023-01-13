<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class BatchUnbindProjectProductsRequest extends Model
{
    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string[]
     */
    public $productKeys;

    /**
     * @var string
     */
    public $projectId;
    protected $_name = [
        'iotInstanceId' => 'IotInstanceId',
        'productKeys'   => 'ProductKeys',
        'projectId'     => 'ProjectId',
    ];

    public function validate()
    {
        Model::validateRequired('productKeys', $this->productKeys, true);
        Model::validateRequired('projectId', $this->projectId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->productKeys) {
            $res['ProductKeys'] = $this->productKeys;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchUnbindProjectProductsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProductKeys'])) {
            if (!empty($map['ProductKeys'])) {
                $model->productKeys = $map['ProductKeys'];
            }
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
