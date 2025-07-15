<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class GenerateOpsItemRequest extends Model
{
    /**
     * @description The token that is used to ensure the idempotency.
     *
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The configuration ID of the O\\&M item.
     *
     * @example oic-ae4f******2c682e3
     *
     * @var string
     */
    public $configurationId;

    /**
     * @description The source system data.
     *
     * This parameter is required.
     *
     * @example /aliyun/ecs
     *
     * @var string
     */
    public $data;

    /**
     * @description The data source system.
     *
     * @example /aliyun/eventbridge/event
     *
     * @var string
     */
    public $dataSource;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'configurationId' => 'ConfigurationId',
        'data' => 'Data',
        'dataSource' => 'DataSource',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->configurationId) {
            $res['ConfigurationId'] = $this->configurationId;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->dataSource) {
            $res['DataSource'] = $this->dataSource;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateOpsItemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ConfigurationId'])) {
            $model->configurationId = $map['ConfigurationId'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['DataSource'])) {
            $model->dataSource = $map['DataSource'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
