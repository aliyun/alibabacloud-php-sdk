<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DataQualityRuleTemplate\checkingConfig;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DataQualityRuleTemplate\samplingConfig;
use AlibabaCloud\Tea\Model;

class DataQualityRuleTemplate extends Model
{
    /**
     * @var checkingConfig
     */
    public $checkingConfig;

    /**
     * @var string
     */
    public $code;

    /**
     * @example /ods/订单数据
     *
     * @var string
     */
    public $directoryPath;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var samplingConfig
     */
    public $samplingConfig;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @example Project
     *
     * @var string
     */
    public $visibleScope;
    protected $_name = [
        'checkingConfig' => 'CheckingConfig',
        'code'           => 'Code',
        'directoryPath'  => 'DirectoryPath',
        'name'           => 'Name',
        'projectId'      => 'ProjectId',
        'samplingConfig' => 'SamplingConfig',
        'tenantId'       => 'TenantId',
        'visibleScope'   => 'VisibleScope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkingConfig) {
            $res['CheckingConfig'] = null !== $this->checkingConfig ? $this->checkingConfig->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->directoryPath) {
            $res['DirectoryPath'] = $this->directoryPath;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->samplingConfig) {
            $res['SamplingConfig'] = null !== $this->samplingConfig ? $this->samplingConfig->toMap() : null;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->visibleScope) {
            $res['VisibleScope'] = $this->visibleScope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataQualityRuleTemplate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckingConfig'])) {
            $model->checkingConfig = checkingConfig::fromMap($map['CheckingConfig']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DirectoryPath'])) {
            $model->directoryPath = $map['DirectoryPath'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SamplingConfig'])) {
            $model->samplingConfig = samplingConfig::fromMap($map['SamplingConfig']);
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['VisibleScope'])) {
            $model->visibleScope = $map['VisibleScope'];
        }

        return $model;
    }
}
