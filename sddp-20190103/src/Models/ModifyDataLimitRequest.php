<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class ModifyDataLimitRequest extends Model
{
    /**
     * @description Specifies whether to enable the security audit feature. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * @example 1
     *
     * @var int
     */
    public $auditStatus;

    /**
     * @description Specifies whether to automatically trigger a re-scan after a rule is modified. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * > When a re-scan is triggered, DSC scans all data in your data asset.
     * @example 1
     *
     * @var int
     */
    public $autoScan;

    /**
     * @description The database engine that is run by the instance. Valid values:
     *
     *   **MySQL**
     *   **SQLServer**
     *
     * @example MySQL
     *
     * @var string
     */
    public $engineType;

    /**
     * @description The unique ID of the data asset for which you want to modify configuration items.
     *
     * > You can call the [DescribeDataLimits](~~DescribeDataLimits~~) operation to query the ID of the data asset.
     * @example 11
     *
     * @var int
     */
    public $id;

    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh**: Chinese (default)
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The retention period of raw logs after you enable the security audit feature. Unit: days. Valid values:
     *
     *   **30**
     *   **90**
     *   **180**
     *   **365**
     *
     * @example 30
     *
     * @var int
     */
    public $logStoreDay;

    /**
     * @description Specifies whether to change the username and password that are used to log on to the ApsaraDB RDS database. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example true
     *
     * @var bool
     */
    public $modifyPassword;

    /**
     * @description The password used to log on to the ApsaraDB RDS database that you authorize DSC to access.
     *
     * @example ********
     *
     * @var string
     */
    public $password;

    /**
     * @description The port that is used to connect to the database.
     *
     * @example 3306
     *
     * @var int
     */
    public $port;

    /**
     * @description The name of the service to which the data asset belongs. Valid values:
     *
     *   **1**: MaxCompute
     *   **2**: Object Storage Service (OSS)
     *   **3**: AnalyticDB for MySQL
     *   **4**: Tablestore
     *   **5**: ApsaraDB RDS
     *
     * @example 5
     *
     * @var int
     */
    public $resourceType;

    /**
     * @description The number of sensitive data samples tht are collected after sensitive data detection is enabled. Valid values:
     *
     *   **0**
     *   **5**
     *   **10**
     *
     * @example 0
     *
     * @var int
     */
    public $samplingSize;

    /**
     * @description The security group that is used by PrivateLink when you install the DSC agent.
     *
     * @var string[]
     */
    public $securityGroupIdList;

    /**
     * @description The region in which the data asset resides. Valid values:
     *
     *   **cn-beijing**: China (Beijing)
     *   **cn-zhangjiakou**: China (Zhangjiakou)
     *   **cn-huhehaote**: China (Hohhot)
     *   **cn-hangzhou**: China (Hangzhou)
     *   **cn-shanghai**: China (Shanghai)
     *   **cn-shenzhen**: China (Shenzhen)
     *   **cn-hongkong**: China (Hong Kong)
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $serviceRegionId;

    /**
     * @description The username used to log on to the ApsaraDB RDS database that you authorize DSC to access.
     *
     * @example User01
     *
     * @var string
     */
    public $userName;

    /**
     * @description The vSwitch that is used by PrivateLink when you install the DSC agent.
     *
     * @var string[]
     */
    public $vSwitchIdList;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the data asset belongs.
     *
     * @example vpc-2zevcqke6hh09c41****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'auditStatus'         => 'AuditStatus',
        'autoScan'            => 'AutoScan',
        'engineType'          => 'EngineType',
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
    }

    public function toMap()
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
            $res['SecurityGroupIdList'] = $this->securityGroupIdList;
        }
        if (null !== $this->serviceRegionId) {
            $res['ServiceRegionId'] = $this->serviceRegionId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->vSwitchIdList) {
            $res['VSwitchIdList'] = $this->vSwitchIdList;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDataLimitRequest
     */
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
                $model->securityGroupIdList = $map['SecurityGroupIdList'];
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
                $model->vSwitchIdList = $map['VSwitchIdList'];
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
