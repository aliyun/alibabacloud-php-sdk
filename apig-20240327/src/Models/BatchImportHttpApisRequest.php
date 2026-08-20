<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\BatchImportHttpApisRequest\specOssConfig;

class BatchImportHttpApisRequest extends Model
{
    /**
     * @var bool
     */
    public $allowUpdate;

    /**
     * @var string
     */
    public $apiType;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $specContentBase64;

    /**
     * @var string
     */
    public $specFileUrl;

    /**
     * @var specOssConfig
     */
    public $specOssConfig;

    /**
     * @var string
     */
    public $strategy;

    /**
     * @var bool
     */
    public $withGatewayExtension;
    protected $_name = [
        'allowUpdate' => 'allowUpdate',
        'apiType' => 'apiType',
        'dryRun' => 'dryRun',
        'gatewayId' => 'gatewayId',
        'resourceGroupId' => 'resourceGroupId',
        'specContentBase64' => 'specContentBase64',
        'specFileUrl' => 'specFileUrl',
        'specOssConfig' => 'specOssConfig',
        'strategy' => 'strategy',
        'withGatewayExtension' => 'withGatewayExtension',
    ];

    public function validate()
    {
        if (null !== $this->specOssConfig) {
            $this->specOssConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowUpdate) {
            $res['allowUpdate'] = $this->allowUpdate;
        }

        if (null !== $this->apiType) {
            $res['apiType'] = $this->apiType;
        }

        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->specContentBase64) {
            $res['specContentBase64'] = $this->specContentBase64;
        }

        if (null !== $this->specFileUrl) {
            $res['specFileUrl'] = $this->specFileUrl;
        }

        if (null !== $this->specOssConfig) {
            $res['specOssConfig'] = null !== $this->specOssConfig ? $this->specOssConfig->toArray($noStream) : $this->specOssConfig;
        }

        if (null !== $this->strategy) {
            $res['strategy'] = $this->strategy;
        }

        if (null !== $this->withGatewayExtension) {
            $res['withGatewayExtension'] = $this->withGatewayExtension;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['allowUpdate'])) {
            $model->allowUpdate = $map['allowUpdate'];
        }

        if (isset($map['apiType'])) {
            $model->apiType = $map['apiType'];
        }

        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        if (isset($map['specContentBase64'])) {
            $model->specContentBase64 = $map['specContentBase64'];
        }

        if (isset($map['specFileUrl'])) {
            $model->specFileUrl = $map['specFileUrl'];
        }

        if (isset($map['specOssConfig'])) {
            $model->specOssConfig = specOssConfig::fromMap($map['specOssConfig']);
        }

        if (isset($map['strategy'])) {
            $model->strategy = $map['strategy'];
        }

        if (isset($map['withGatewayExtension'])) {
            $model->withGatewayExtension = $map['withGatewayExtension'];
        }

        return $model;
    }
}
