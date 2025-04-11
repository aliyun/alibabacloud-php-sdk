<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeBackendInfoResponseBody\backendInfo\backendModels\backendConfig;

use AlibabaCloud\Dara\Model;

class functionComputeConfig extends Model
{
    /**
     * @var string
     */
    public $fcBaseUrl;

    /**
     * @var string
     */
    public $fcRegionId;

    /**
     * @var string
     */
    public $fcType;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var bool
     */
    public $onlyBusinessPath;

    /**
     * @var string
     */
    public $qualifier;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var string
     */
    public $triggerName;
    protected $_name = [
        'fcBaseUrl' => 'FcBaseUrl',
        'fcRegionId' => 'FcRegionId',
        'fcType' => 'FcType',
        'functionName' => 'FunctionName',
        'onlyBusinessPath' => 'OnlyBusinessPath',
        'qualifier' => 'Qualifier',
        'roleArn' => 'RoleArn',
        'serviceName' => 'ServiceName',
        'triggerName' => 'TriggerName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fcBaseUrl) {
            $res['FcBaseUrl'] = $this->fcBaseUrl;
        }

        if (null !== $this->fcRegionId) {
            $res['FcRegionId'] = $this->fcRegionId;
        }

        if (null !== $this->fcType) {
            $res['FcType'] = $this->fcType;
        }

        if (null !== $this->functionName) {
            $res['FunctionName'] = $this->functionName;
        }

        if (null !== $this->onlyBusinessPath) {
            $res['OnlyBusinessPath'] = $this->onlyBusinessPath;
        }

        if (null !== $this->qualifier) {
            $res['Qualifier'] = $this->qualifier;
        }

        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        if (null !== $this->triggerName) {
            $res['TriggerName'] = $this->triggerName;
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
        if (isset($map['FcBaseUrl'])) {
            $model->fcBaseUrl = $map['FcBaseUrl'];
        }

        if (isset($map['FcRegionId'])) {
            $model->fcRegionId = $map['FcRegionId'];
        }

        if (isset($map['FcType'])) {
            $model->fcType = $map['FcType'];
        }

        if (isset($map['FunctionName'])) {
            $model->functionName = $map['FunctionName'];
        }

        if (isset($map['OnlyBusinessPath'])) {
            $model->onlyBusinessPath = $map['OnlyBusinessPath'];
        }

        if (isset($map['Qualifier'])) {
            $model->qualifier = $map['Qualifier'];
        }

        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        if (isset($map['TriggerName'])) {
            $model->triggerName = $map['TriggerName'];
        }

        return $model;
    }
}
