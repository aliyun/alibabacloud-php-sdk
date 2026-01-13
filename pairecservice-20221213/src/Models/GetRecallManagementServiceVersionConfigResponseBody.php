<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementServiceVersionConfigResponseBody\mergeConfig;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementServiceVersionConfigResponseBody\recallConfig;

class GetRecallManagementServiceVersionConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $configType;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var mergeConfig
     */
    public $mergeConfig;

    /**
     * @var recallConfig
     */
    public $recallConfig;

    /**
     * @var string
     */
    public $recallManagementServiceId;

    /**
     * @var string
     */
    public $recallManagementServiceVersionConfigId;

    /**
     * @var string
     */
    public $recallManagementServiceVersionId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configType' => 'ConfigType',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'mergeConfig' => 'MergeConfig',
        'recallConfig' => 'RecallConfig',
        'recallManagementServiceId' => 'RecallManagementServiceId',
        'recallManagementServiceVersionConfigId' => 'RecallManagementServiceVersionConfigId',
        'recallManagementServiceVersionId' => 'RecallManagementServiceVersionId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->mergeConfig) {
            $this->mergeConfig->validate();
        }
        if (null !== $this->recallConfig) {
            $this->recallConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->mergeConfig) {
            $res['MergeConfig'] = null !== $this->mergeConfig ? $this->mergeConfig->toArray($noStream) : $this->mergeConfig;
        }

        if (null !== $this->recallConfig) {
            $res['RecallConfig'] = null !== $this->recallConfig ? $this->recallConfig->toArray($noStream) : $this->recallConfig;
        }

        if (null !== $this->recallManagementServiceId) {
            $res['RecallManagementServiceId'] = $this->recallManagementServiceId;
        }

        if (null !== $this->recallManagementServiceVersionConfigId) {
            $res['RecallManagementServiceVersionConfigId'] = $this->recallManagementServiceVersionConfigId;
        }

        if (null !== $this->recallManagementServiceVersionId) {
            $res['RecallManagementServiceVersionId'] = $this->recallManagementServiceVersionId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['MergeConfig'])) {
            $model->mergeConfig = mergeConfig::fromMap($map['MergeConfig']);
        }

        if (isset($map['RecallConfig'])) {
            $model->recallConfig = recallConfig::fromMap($map['RecallConfig']);
        }

        if (isset($map['RecallManagementServiceId'])) {
            $model->recallManagementServiceId = $map['RecallManagementServiceId'];
        }

        if (isset($map['RecallManagementServiceVersionConfigId'])) {
            $model->recallManagementServiceVersionConfigId = $map['RecallManagementServiceVersionConfigId'];
        }

        if (isset($map['RecallManagementServiceVersionId'])) {
            $model->recallManagementServiceVersionId = $map['RecallManagementServiceVersionId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
