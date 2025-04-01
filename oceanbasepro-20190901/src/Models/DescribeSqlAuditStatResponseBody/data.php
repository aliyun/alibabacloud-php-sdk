<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSqlAuditStatResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var float
     */
    public $affectRows;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var float
     */
    public $executeTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $operatorType;

    /**
     * @var float
     */
    public $returnRows;

    /**
     * @var float
     */
    public $scanRows;

    /**
     * @var string
     */
    public $sqlId;

    /**
     * @var string
     */
    public $sqlStatement;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var int
     */
    public $totalAffectRows;

    /**
     * @var int
     */
    public $totalFailed;

    /**
     * @var int
     */
    public $totalReturnRows;

    /**
     * @var int
     */
    public $totalScanRows;

    /**
     * @var int
     */
    public $totalSucceed;

    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'affectRows' => 'AffectRows',
        'databaseName' => 'DatabaseName',
        'executeTime' => 'ExecuteTime',
        'instanceId' => 'InstanceId',
        'operatorType' => 'OperatorType',
        'returnRows' => 'ReturnRows',
        'scanRows' => 'ScanRows',
        'sqlId' => 'SqlId',
        'sqlStatement' => 'SqlStatement',
        'tenantId' => 'TenantId',
        'totalAffectRows' => 'TotalAffectRows',
        'totalFailed' => 'TotalFailed',
        'totalReturnRows' => 'TotalReturnRows',
        'totalScanRows' => 'TotalScanRows',
        'totalSucceed' => 'TotalSucceed',
        'userClientIp' => 'UserClientIp',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->affectRows) {
            $res['AffectRows'] = $this->affectRows;
        }

        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }

        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->operatorType) {
            $res['OperatorType'] = $this->operatorType;
        }

        if (null !== $this->returnRows) {
            $res['ReturnRows'] = $this->returnRows;
        }

        if (null !== $this->scanRows) {
            $res['ScanRows'] = $this->scanRows;
        }

        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }

        if (null !== $this->sqlStatement) {
            $res['SqlStatement'] = $this->sqlStatement;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->totalAffectRows) {
            $res['TotalAffectRows'] = $this->totalAffectRows;
        }

        if (null !== $this->totalFailed) {
            $res['TotalFailed'] = $this->totalFailed;
        }

        if (null !== $this->totalReturnRows) {
            $res['TotalReturnRows'] = $this->totalReturnRows;
        }

        if (null !== $this->totalScanRows) {
            $res['TotalScanRows'] = $this->totalScanRows;
        }

        if (null !== $this->totalSucceed) {
            $res['TotalSucceed'] = $this->totalSucceed;
        }

        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
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
        if (isset($map['AffectRows'])) {
            $model->affectRows = $map['AffectRows'];
        }

        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }

        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OperatorType'])) {
            $model->operatorType = $map['OperatorType'];
        }

        if (isset($map['ReturnRows'])) {
            $model->returnRows = $map['ReturnRows'];
        }

        if (isset($map['ScanRows'])) {
            $model->scanRows = $map['ScanRows'];
        }

        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }

        if (isset($map['SqlStatement'])) {
            $model->sqlStatement = $map['SqlStatement'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['TotalAffectRows'])) {
            $model->totalAffectRows = $map['TotalAffectRows'];
        }

        if (isset($map['TotalFailed'])) {
            $model->totalFailed = $map['TotalFailed'];
        }

        if (isset($map['TotalReturnRows'])) {
            $model->totalReturnRows = $map['TotalReturnRows'];
        }

        if (isset($map['TotalScanRows'])) {
            $model->totalScanRows = $map['TotalScanRows'];
        }

        if (isset($map['TotalSucceed'])) {
            $model->totalSucceed = $map['TotalSucceed'];
        }

        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
