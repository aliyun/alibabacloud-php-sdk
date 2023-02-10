<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class BatchUnbindProjectProductsRequest extends Model
{
    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example a1BwAGV****
     *
     * @var string[]
     */
    public $productKeys;

    /**
     * @example a123********
     *
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
