<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class CreateApplicationShrinkRequest extends Model
{
    /**
     * @description The configurations of application alerts.
     *
     * @var string
     */
    public $alarmConfigShrink;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * @example TF-CreateApplication-1647587475-84104b89-eba5-47a8-b2fd-807b8b7d
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the application.
     *
     * @example application
     *
     * @var string
     */
    public $description;

    /**
     * @description The application name.
     *
     * This parameter is required.
     * @example MyApplication
     *
     * @var string
     */
    public $name;

    /**
     * @description The region ID. Set the value to cn-hangzhou.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxsn4m******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the service.
     *
     * @example service-79538e30e44541b699d8
     *
     * @var string
     */
    public $serviceId;

    /**
     * @description The tags.
     *
     * @example {"k1":"v1","k2":"v2"}
     *
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'alarmConfigShrink' => 'AlarmConfig',
        'clientToken'       => 'ClientToken',
        'description'       => 'Description',
        'name'              => 'Name',
        'regionId'          => 'RegionId',
        'resourceGroupId'   => 'ResourceGroupId',
        'serviceId'         => 'ServiceId',
        'tagsShrink'        => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmConfigShrink) {
            $res['AlarmConfig'] = $this->alarmConfigShrink;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateApplicationShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmConfig'])) {
            $model->alarmConfigShrink = $map['AlarmConfig'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}
