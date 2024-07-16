<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\Tea\Model;

class CreateBatchOperateCardsTaskRequest extends Model
{
    /**
     * @example TF-******-1633255280-43c94bf7-2dd3-4c14-8
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example task- test
     *
     * @var string
     */
    public $description;

    /**
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description This parameter is required.
     *
     * @example CurrentMonth
     *
     * @var string
     */
    public $effectType;

    /**
     * @var string[]
     */
    public $iccids;

    /**
     * @example https://examplebucket.oss-eu-central-1.aliyuncs.com/***
     *
     * @var string
     */
    public $iccidsOssFilePath;

    /**
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example BreakNetwork
     *
     * @var string
     */
    public $operateType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description This parameter is required.
     *
     * @example 100
     *
     * @var int
     */
    public $threshold;

    /**
     * @var string[]
     */
    public $wirelessCloudConnectorIds;
    protected $_name = [
        'clientToken'               => 'ClientToken',
        'description'               => 'Description',
        'dryRun'                    => 'DryRun',
        'effectType'                => 'EffectType',
        'iccids'                    => 'Iccids',
        'iccidsOssFilePath'         => 'IccidsOssFilePath',
        'name'                      => 'Name',
        'operateType'               => 'OperateType',
        'regionId'                  => 'RegionId',
        'threshold'                 => 'Threshold',
        'wirelessCloudConnectorIds' => 'WirelessCloudConnectorIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->effectType) {
            $res['EffectType'] = $this->effectType;
        }
        if (null !== $this->iccids) {
            $res['Iccids'] = $this->iccids;
        }
        if (null !== $this->iccidsOssFilePath) {
            $res['IccidsOssFilePath'] = $this->iccidsOssFilePath;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->wirelessCloudConnectorIds) {
            $res['WirelessCloudConnectorIds'] = $this->wirelessCloudConnectorIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBatchOperateCardsTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EffectType'])) {
            $model->effectType = $map['EffectType'];
        }
        if (isset($map['Iccids'])) {
            if (!empty($map['Iccids'])) {
                $model->iccids = $map['Iccids'];
            }
        }
        if (isset($map['IccidsOssFilePath'])) {
            $model->iccidsOssFilePath = $map['IccidsOssFilePath'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['WirelessCloudConnectorIds'])) {
            if (!empty($map['WirelessCloudConnectorIds'])) {
                $model->wirelessCloudConnectorIds = $map['WirelessCloudConnectorIds'];
            }
        }

        return $model;
    }
}
