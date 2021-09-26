<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeUserStatusResponseBody;

use AlibabaCloud\Tea\Model;

class userStatus extends Model
{
    /**
     * @var int
     */
    public $useOssSize;

    /**
     * @var int
     */
    public $useInstanceNum;

    /**
     * @var int
     */
    public $instanceNum;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $incSensitiveTables;

    /**
     * @var bool
     */
    public $auditUpgradeStatus;

    /**
     * @var int
     */
    public $dataMaskTasks;

    /**
     * @var bool
     */
    public $authed;

    /**
     * @var int
     */
    public $labStatus;

    /**
     * @var bool
     */
    public $odpsSet;

    /**
     * @var bool
     */
    public $ossBucketSet;

    /**
     * @var int
     */
    public $sensitiveTable;

    /**
     * @var int
     */
    public $remainDays;

    /**
     * @var int
     */
    public $totalDataMaskColumns;

    /**
     * @var int
     */
    public $datamaskColumns;

    /**
     * @var string
     */
    public $authProductList;

    /**
     * @var bool
     */
    public $trail;

    /**
     * @var int
     */
    public $divulgeCount;

    /**
     * @var bool
     */
    public $rdsSet;

    /**
     * @var int
     */
    public $dbAuditStatus;

    /**
     * @var bool
     */
    public $renewStatus;

    /**
     * @var int
     */
    public $sensitiveObjects;

    /**
     * @var int
     */
    public $dataMaskColumns;

    /**
     * @var int
     */
    public $dlpTotalCount;

    /**
     * @var int
     */
    public $sensitiveObject;

    /**
     * @var int
     */
    public $dlpCount;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var int
     */
    public $ossSize;

    /**
     * @var string
     */
    public $sensitiveTotalTop;

    /**
     * @var int
     */
    public $sensitiveTables;

    /**
     * @var string
     */
    public $sensitiveTop;

    /**
     * @var bool
     */
    public $buyed;

    /**
     * @var int
     */
    public $incSensitiveObjects;

    /**
     * @var int
     */
    public $instanceStatus;

    /**
     * @var bool
     */
    public $assetScanned;

    /**
     * @var int
     */
    public $alarmCount;

    /**
     * @var string
     */
    public $displayTime;
    protected $_name = [
        'useOssSize'           => 'UseOssSize',
        'useInstanceNum'       => 'UseInstanceNum',
        'instanceNum'          => 'InstanceNum',
        'chargeType'           => 'ChargeType',
        'incSensitiveTables'   => 'IncSensitiveTables',
        'auditUpgradeStatus'   => 'AuditUpgradeStatus',
        'dataMaskTasks'        => 'DataMaskTasks',
        'authed'               => 'Authed',
        'labStatus'            => 'LabStatus',
        'odpsSet'              => 'OdpsSet',
        'ossBucketSet'         => 'OssBucketSet',
        'sensitiveTable'       => 'SensitiveTable',
        'remainDays'           => 'RemainDays',
        'totalDataMaskColumns' => 'TotalDataMaskColumns',
        'datamaskColumns'      => 'DatamaskColumns',
        'authProductList'      => 'AuthProductList',
        'trail'                => 'Trail',
        'divulgeCount'         => 'DivulgeCount',
        'rdsSet'               => 'RdsSet',
        'dbAuditStatus'        => 'DbAuditStatus',
        'renewStatus'          => 'RenewStatus',
        'sensitiveObjects'     => 'SensitiveObjects',
        'dataMaskColumns'      => 'DataMaskColumns',
        'dlpTotalCount'        => 'DlpTotalCount',
        'sensitiveObject'      => 'SensitiveObject',
        'dlpCount'             => 'DlpCount',
        'instanceId'           => 'InstanceId',
        'accessKeyId'          => 'AccessKeyId',
        'ossSize'              => 'OssSize',
        'sensitiveTotalTop'    => 'SensitiveTotalTop',
        'sensitiveTables'      => 'SensitiveTables',
        'sensitiveTop'         => 'SensitiveTop',
        'buyed'                => 'Buyed',
        'incSensitiveObjects'  => 'IncSensitiveObjects',
        'instanceStatus'       => 'InstanceStatus',
        'assetScanned'         => 'AssetScanned',
        'alarmCount'           => 'AlarmCount',
        'displayTime'          => 'DisplayTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->useOssSize) {
            $res['UseOssSize'] = $this->useOssSize;
        }
        if (null !== $this->useInstanceNum) {
            $res['UseInstanceNum'] = $this->useInstanceNum;
        }
        if (null !== $this->instanceNum) {
            $res['InstanceNum'] = $this->instanceNum;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->incSensitiveTables) {
            $res['IncSensitiveTables'] = $this->incSensitiveTables;
        }
        if (null !== $this->auditUpgradeStatus) {
            $res['AuditUpgradeStatus'] = $this->auditUpgradeStatus;
        }
        if (null !== $this->dataMaskTasks) {
            $res['DataMaskTasks'] = $this->dataMaskTasks;
        }
        if (null !== $this->authed) {
            $res['Authed'] = $this->authed;
        }
        if (null !== $this->labStatus) {
            $res['LabStatus'] = $this->labStatus;
        }
        if (null !== $this->odpsSet) {
            $res['OdpsSet'] = $this->odpsSet;
        }
        if (null !== $this->ossBucketSet) {
            $res['OssBucketSet'] = $this->ossBucketSet;
        }
        if (null !== $this->sensitiveTable) {
            $res['SensitiveTable'] = $this->sensitiveTable;
        }
        if (null !== $this->remainDays) {
            $res['RemainDays'] = $this->remainDays;
        }
        if (null !== $this->totalDataMaskColumns) {
            $res['TotalDataMaskColumns'] = $this->totalDataMaskColumns;
        }
        if (null !== $this->datamaskColumns) {
            $res['DatamaskColumns'] = $this->datamaskColumns;
        }
        if (null !== $this->authProductList) {
            $res['AuthProductList'] = $this->authProductList;
        }
        if (null !== $this->trail) {
            $res['Trail'] = $this->trail;
        }
        if (null !== $this->divulgeCount) {
            $res['DivulgeCount'] = $this->divulgeCount;
        }
        if (null !== $this->rdsSet) {
            $res['RdsSet'] = $this->rdsSet;
        }
        if (null !== $this->dbAuditStatus) {
            $res['DbAuditStatus'] = $this->dbAuditStatus;
        }
        if (null !== $this->renewStatus) {
            $res['RenewStatus'] = $this->renewStatus;
        }
        if (null !== $this->sensitiveObjects) {
            $res['SensitiveObjects'] = $this->sensitiveObjects;
        }
        if (null !== $this->dataMaskColumns) {
            $res['DataMaskColumns'] = $this->dataMaskColumns;
        }
        if (null !== $this->dlpTotalCount) {
            $res['DlpTotalCount'] = $this->dlpTotalCount;
        }
        if (null !== $this->sensitiveObject) {
            $res['SensitiveObject'] = $this->sensitiveObject;
        }
        if (null !== $this->dlpCount) {
            $res['DlpCount'] = $this->dlpCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->ossSize) {
            $res['OssSize'] = $this->ossSize;
        }
        if (null !== $this->sensitiveTotalTop) {
            $res['SensitiveTotalTop'] = $this->sensitiveTotalTop;
        }
        if (null !== $this->sensitiveTables) {
            $res['SensitiveTables'] = $this->sensitiveTables;
        }
        if (null !== $this->sensitiveTop) {
            $res['SensitiveTop'] = $this->sensitiveTop;
        }
        if (null !== $this->buyed) {
            $res['Buyed'] = $this->buyed;
        }
        if (null !== $this->incSensitiveObjects) {
            $res['IncSensitiveObjects'] = $this->incSensitiveObjects;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->assetScanned) {
            $res['AssetScanned'] = $this->assetScanned;
        }
        if (null !== $this->alarmCount) {
            $res['AlarmCount'] = $this->alarmCount;
        }
        if (null !== $this->displayTime) {
            $res['DisplayTime'] = $this->displayTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UseOssSize'])) {
            $model->useOssSize = $map['UseOssSize'];
        }
        if (isset($map['UseInstanceNum'])) {
            $model->useInstanceNum = $map['UseInstanceNum'];
        }
        if (isset($map['InstanceNum'])) {
            $model->instanceNum = $map['InstanceNum'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['IncSensitiveTables'])) {
            $model->incSensitiveTables = $map['IncSensitiveTables'];
        }
        if (isset($map['AuditUpgradeStatus'])) {
            $model->auditUpgradeStatus = $map['AuditUpgradeStatus'];
        }
        if (isset($map['DataMaskTasks'])) {
            $model->dataMaskTasks = $map['DataMaskTasks'];
        }
        if (isset($map['Authed'])) {
            $model->authed = $map['Authed'];
        }
        if (isset($map['LabStatus'])) {
            $model->labStatus = $map['LabStatus'];
        }
        if (isset($map['OdpsSet'])) {
            $model->odpsSet = $map['OdpsSet'];
        }
        if (isset($map['OssBucketSet'])) {
            $model->ossBucketSet = $map['OssBucketSet'];
        }
        if (isset($map['SensitiveTable'])) {
            $model->sensitiveTable = $map['SensitiveTable'];
        }
        if (isset($map['RemainDays'])) {
            $model->remainDays = $map['RemainDays'];
        }
        if (isset($map['TotalDataMaskColumns'])) {
            $model->totalDataMaskColumns = $map['TotalDataMaskColumns'];
        }
        if (isset($map['DatamaskColumns'])) {
            $model->datamaskColumns = $map['DatamaskColumns'];
        }
        if (isset($map['AuthProductList'])) {
            $model->authProductList = $map['AuthProductList'];
        }
        if (isset($map['Trail'])) {
            $model->trail = $map['Trail'];
        }
        if (isset($map['DivulgeCount'])) {
            $model->divulgeCount = $map['DivulgeCount'];
        }
        if (isset($map['RdsSet'])) {
            $model->rdsSet = $map['RdsSet'];
        }
        if (isset($map['DbAuditStatus'])) {
            $model->dbAuditStatus = $map['DbAuditStatus'];
        }
        if (isset($map['RenewStatus'])) {
            $model->renewStatus = $map['RenewStatus'];
        }
        if (isset($map['SensitiveObjects'])) {
            $model->sensitiveObjects = $map['SensitiveObjects'];
        }
        if (isset($map['DataMaskColumns'])) {
            $model->dataMaskColumns = $map['DataMaskColumns'];
        }
        if (isset($map['DlpTotalCount'])) {
            $model->dlpTotalCount = $map['DlpTotalCount'];
        }
        if (isset($map['SensitiveObject'])) {
            $model->sensitiveObject = $map['SensitiveObject'];
        }
        if (isset($map['DlpCount'])) {
            $model->dlpCount = $map['DlpCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['OssSize'])) {
            $model->ossSize = $map['OssSize'];
        }
        if (isset($map['SensitiveTotalTop'])) {
            $model->sensitiveTotalTop = $map['SensitiveTotalTop'];
        }
        if (isset($map['SensitiveTables'])) {
            $model->sensitiveTables = $map['SensitiveTables'];
        }
        if (isset($map['SensitiveTop'])) {
            $model->sensitiveTop = $map['SensitiveTop'];
        }
        if (isset($map['Buyed'])) {
            $model->buyed = $map['Buyed'];
        }
        if (isset($map['IncSensitiveObjects'])) {
            $model->incSensitiveObjects = $map['IncSensitiveObjects'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['AssetScanned'])) {
            $model->assetScanned = $map['AssetScanned'];
        }
        if (isset($map['AlarmCount'])) {
            $model->alarmCount = $map['AlarmCount'];
        }
        if (isset($map['DisplayTime'])) {
            $model->displayTime = $map['DisplayTime'];
        }

        return $model;
    }
}
