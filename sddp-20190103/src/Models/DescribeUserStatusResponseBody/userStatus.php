<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeUserStatusResponseBody;

use AlibabaCloud\Tea\Model;

class userStatus extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var bool
     */
    public $authed;

    /**
     * @var bool
     */
    public $buyed;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $dataMaskColumns;

    /**
     * @var int
     */
    public $dataMaskTasks;

    /**
     * @var int
     */
    public $datamaskColumns;

    /**
     * @var int
     */
    public $divulgeCount;

    /**
     * @var int
     */
    public $dlpTotalCount;

    /**
     * @var int
     */
    public $incSensitiveObjects;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $instanceNum;

    /**
     * @var int
     */
    public $instanceStatus;

    /**
     * @var int
     */
    public $labStatus;

    /**
     * @var bool
     */
    public $ossBucketSet;

    /**
     * @var int
     */
    public $ossSize;

    /**
     * @var int
     */
    public $remainDays;

    /**
     * @var int
     */
    public $sensitiveObject;

    /**
     * @var int
     */
    public $sensitiveTable;

    /**
     * @var int
     */
    public $sensitiveTables;

    /**
     * @var int
     */
    public $totalDataMaskColumns;

    /**
     * @var bool
     */
    public $trail;

    /**
     * @var int
     */
    public $useInstanceNum;

    /**
     * @var int
     */
    public $useOssSize;
    protected $_name = [
        'accessKeyId'          => 'AccessKeyId',
        'authed'               => 'Authed',
        'buyed'                => 'Buyed',
        'chargeType'           => 'ChargeType',
        'dataMaskColumns'      => 'DataMaskColumns',
        'dataMaskTasks'        => 'DataMaskTasks',
        'datamaskColumns'      => 'DatamaskColumns',
        'divulgeCount'         => 'DivulgeCount',
        'dlpTotalCount'        => 'DlpTotalCount',
        'incSensitiveObjects'  => 'IncSensitiveObjects',
        'instanceId'           => 'InstanceId',
        'instanceNum'          => 'InstanceNum',
        'instanceStatus'       => 'InstanceStatus',
        'labStatus'            => 'LabStatus',
        'ossBucketSet'         => 'OssBucketSet',
        'ossSize'              => 'OssSize',
        'remainDays'           => 'RemainDays',
        'sensitiveObject'      => 'SensitiveObject',
        'sensitiveTable'       => 'SensitiveTable',
        'sensitiveTables'      => 'SensitiveTables',
        'totalDataMaskColumns' => 'TotalDataMaskColumns',
        'trail'                => 'Trail',
        'useInstanceNum'       => 'UseInstanceNum',
        'useOssSize'           => 'UseOssSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->authed) {
            $res['Authed'] = $this->authed;
        }
        if (null !== $this->buyed) {
            $res['Buyed'] = $this->buyed;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->dataMaskColumns) {
            $res['DataMaskColumns'] = $this->dataMaskColumns;
        }
        if (null !== $this->dataMaskTasks) {
            $res['DataMaskTasks'] = $this->dataMaskTasks;
        }
        if (null !== $this->datamaskColumns) {
            $res['DatamaskColumns'] = $this->datamaskColumns;
        }
        if (null !== $this->divulgeCount) {
            $res['DivulgeCount'] = $this->divulgeCount;
        }
        if (null !== $this->dlpTotalCount) {
            $res['DlpTotalCount'] = $this->dlpTotalCount;
        }
        if (null !== $this->incSensitiveObjects) {
            $res['IncSensitiveObjects'] = $this->incSensitiveObjects;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceNum) {
            $res['InstanceNum'] = $this->instanceNum;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->labStatus) {
            $res['LabStatus'] = $this->labStatus;
        }
        if (null !== $this->ossBucketSet) {
            $res['OssBucketSet'] = $this->ossBucketSet;
        }
        if (null !== $this->ossSize) {
            $res['OssSize'] = $this->ossSize;
        }
        if (null !== $this->remainDays) {
            $res['RemainDays'] = $this->remainDays;
        }
        if (null !== $this->sensitiveObject) {
            $res['SensitiveObject'] = $this->sensitiveObject;
        }
        if (null !== $this->sensitiveTable) {
            $res['SensitiveTable'] = $this->sensitiveTable;
        }
        if (null !== $this->sensitiveTables) {
            $res['SensitiveTables'] = $this->sensitiveTables;
        }
        if (null !== $this->totalDataMaskColumns) {
            $res['TotalDataMaskColumns'] = $this->totalDataMaskColumns;
        }
        if (null !== $this->trail) {
            $res['Trail'] = $this->trail;
        }
        if (null !== $this->useInstanceNum) {
            $res['UseInstanceNum'] = $this->useInstanceNum;
        }
        if (null !== $this->useOssSize) {
            $res['UseOssSize'] = $this->useOssSize;
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
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['Authed'])) {
            $model->authed = $map['Authed'];
        }
        if (isset($map['Buyed'])) {
            $model->buyed = $map['Buyed'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['DataMaskColumns'])) {
            $model->dataMaskColumns = $map['DataMaskColumns'];
        }
        if (isset($map['DataMaskTasks'])) {
            $model->dataMaskTasks = $map['DataMaskTasks'];
        }
        if (isset($map['DatamaskColumns'])) {
            $model->datamaskColumns = $map['DatamaskColumns'];
        }
        if (isset($map['DivulgeCount'])) {
            $model->divulgeCount = $map['DivulgeCount'];
        }
        if (isset($map['DlpTotalCount'])) {
            $model->dlpTotalCount = $map['DlpTotalCount'];
        }
        if (isset($map['IncSensitiveObjects'])) {
            $model->incSensitiveObjects = $map['IncSensitiveObjects'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceNum'])) {
            $model->instanceNum = $map['InstanceNum'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['LabStatus'])) {
            $model->labStatus = $map['LabStatus'];
        }
        if (isset($map['OssBucketSet'])) {
            $model->ossBucketSet = $map['OssBucketSet'];
        }
        if (isset($map['OssSize'])) {
            $model->ossSize = $map['OssSize'];
        }
        if (isset($map['RemainDays'])) {
            $model->remainDays = $map['RemainDays'];
        }
        if (isset($map['SensitiveObject'])) {
            $model->sensitiveObject = $map['SensitiveObject'];
        }
        if (isset($map['SensitiveTable'])) {
            $model->sensitiveTable = $map['SensitiveTable'];
        }
        if (isset($map['SensitiveTables'])) {
            $model->sensitiveTables = $map['SensitiveTables'];
        }
        if (isset($map['TotalDataMaskColumns'])) {
            $model->totalDataMaskColumns = $map['TotalDataMaskColumns'];
        }
        if (isset($map['Trail'])) {
            $model->trail = $map['Trail'];
        }
        if (isset($map['UseInstanceNum'])) {
            $model->useInstanceNum = $map['UseInstanceNum'];
        }
        if (isset($map['UseOssSize'])) {
            $model->useOssSize = $map['UseOssSize'];
        }

        return $model;
    }
}
