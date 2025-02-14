<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;

class ModifyDataLimitRequest extends Model
{
    /**
     * @var int
     */
    public $auditStatus;
    /**
     * @var int
     */
    public $autoScan;
    /**
     * @var string
     */
    public $engineType;
    /**
     * @var int
     */
    public $featureType;
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var int
     */
    public $logStoreDay;
    /**
     * @var bool
     */
    public $modifyPassword;
    /**
     * @var string
     */
    public $password;
    /**
     * @var int
     */
    public $port;
    /**
     * @var int
     */
    public $resourceType;
    /**
     * @var int
     */
    public $samplingSize;
    /**
     * @var string[]
     */
    public $securityGroupIdList;
    /**
     * @var string
     */
    public $serviceRegionId;
    /**
     * @var string
     */
    public $userName;
    /**
     * @var string[]
     */
    public $vSwitchIdList;
    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'auditStatus'         => 'AuditStatus',
        'autoScan'            => 'AutoScan',
        'engineType'          => 'EngineType',
        'featureType'         => 'FeatureType',
        'id'                  => 'Id',
        'lang'                => 'Lang',
        'logStoreDay'         => 'LogStoreDay',
        'modifyPassword'      => 'ModifyPassword',
        'password'            => 'Password',
        'port'                => 'Port',
        'resourceType'        => 'ResourceType',
        'samplingSize'        => 'SamplingSize',
        'securityGroupIdList' => 'SecurityGroupIdList',
        'serviceRegionId'     => 'ServiceRegionId',
        'userName'            => 'UserName',
        'vSwitchIdList'       => 'VSwitchIdList',
        'vpcId'               => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->securityGroupIdList)) {
            Model::validateArray($this->securityGroupIdList);
        }
        if (\is_array($this->vSwitchIdList)) {
            Model::validateArray($this->vSwitchIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }

        if (null !== $this->autoScan) {
            $res['AutoScan'] = $this->autoScan;
        }

        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }

        if (null !== $this->featureType) {
            $res['FeatureType'] = $this->featureType;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->logStoreDay) {
            $res['LogStoreDay'] = $this->logStoreDay;
        }

        if (null !== $this->modifyPassword) {
            $res['ModifyPassword'] = $this->modifyPassword;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->samplingSize) {
            $res['SamplingSize'] = $this->samplingSize;
        }

        if (null !== $this->securityGroupIdList) {
            if (\is_array($this->securityGroupIdList)) {
                $res['SecurityGroupIdList'] = [];
                $n1                         = 0;
                foreach ($this->securityGroupIdList as $item1) {
                    $res['SecurityGroupIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->serviceRegionId) {
            $res['ServiceRegionId'] = $this->serviceRegionId;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->vSwitchIdList) {
            if (\is_array($this->vSwitchIdList)) {
                $res['VSwitchIdList'] = [];
                $n1                   = 0;
                foreach ($this->vSwitchIdList as $item1) {
                    $res['VSwitchIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }

        if (isset($map['AutoScan'])) {
            $model->autoScan = $map['AutoScan'];
        }

        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }

        if (isset($map['FeatureType'])) {
            $model->featureType = $map['FeatureType'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['LogStoreDay'])) {
            $model->logStoreDay = $map['LogStoreDay'];
        }

        if (isset($map['ModifyPassword'])) {
            $model->modifyPassword = $map['ModifyPassword'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['SamplingSize'])) {
            $model->samplingSize = $map['SamplingSize'];
        }

        if (isset($map['SecurityGroupIdList'])) {
            if (!empty($map['SecurityGroupIdList'])) {
                $model->securityGroupIdList = [];
                $n1                         = 0;
                foreach ($map['SecurityGroupIdList'] as $item1) {
                    $model->securityGroupIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ServiceRegionId'])) {
            $model->serviceRegionId = $map['ServiceRegionId'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['VSwitchIdList'])) {
            if (!empty($map['VSwitchIdList'])) {
                $model->vSwitchIdList = [];
                $n1                   = 0;
                foreach ($map['VSwitchIdList'] as $item1) {
                    $model->vSwitchIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
