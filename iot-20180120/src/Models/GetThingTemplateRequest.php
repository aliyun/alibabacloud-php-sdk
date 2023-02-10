<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class GetThingTemplateRequest extends Model
{
    /**
     * @example Lighting
     *
     * @var string
     */
    public $categoryKey;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example rg-acfm4l5tcwd****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'categoryKey'     => 'CategoryKey',
        'iotInstanceId'   => 'IotInstanceId',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryKey) {
            $res['CategoryKey'] = $this->categoryKey;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetThingTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryKey'])) {
            $model->categoryKey = $map['CategoryKey'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
