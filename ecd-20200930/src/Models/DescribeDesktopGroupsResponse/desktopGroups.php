<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopGroupsResponse;

use AlibabaCloud\Tea\Model;

class desktopGroups extends Model
{
    /**
     * @var string
     */
    public $comments;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $dataDiskCategory;

    /**
     * @var string
     */
    public $dataDiskSize;

    /**
     * @var string
     */
    public $desktopGroupId;

    /**
     * @var string
     */
    public $desktopGroupName;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $directoryType;

    /**
     * @var int
     */
    public $endUserCount;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var float
     */
    public $gpuCount;

    /**
     * @var string
     */
    public $gpuSpec;

    /**
     * @var int
     */
    public $keepDuration;

    /**
     * @var int
     */
    public $maxDesktopsCount;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var int
     */
    public $minDesktopsCount;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $officeSiteName;

    /**
     * @var string
     */
    public $officeSiteType;

    /**
     * @var string
     */
    public $ownBundleId;

    /**
     * @var string
     */
    public $ownBundleName;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $policyGroupName;

    /**
     * @var int
     */
    public $resetType;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $systemDiskCategory;

    /**
     * @var int
     */
    public $systemDiskSize;
    protected $_name = [
        'comments'           => 'Comments',
        'cpu'                => 'Cpu',
        'createTime'         => 'CreateTime',
        'creator'            => 'Creator',
        'dataDiskCategory'   => 'DataDiskCategory',
        'dataDiskSize'       => 'DataDiskSize',
        'desktopGroupId'     => 'DesktopGroupId',
        'desktopGroupName'   => 'DesktopGroupName',
        'directoryId'        => 'DirectoryId',
        'directoryType'      => 'DirectoryType',
        'endUserCount'       => 'EndUserCount',
        'expiredTime'        => 'ExpiredTime',
        'gpuCount'           => 'GpuCount',
        'gpuSpec'            => 'GpuSpec',
        'keepDuration'       => 'KeepDuration',
        'maxDesktopsCount'   => 'MaxDesktopsCount',
        'memory'             => 'Memory',
        'minDesktopsCount'   => 'MinDesktopsCount',
        'officeSiteId'       => 'OfficeSiteId',
        'officeSiteName'     => 'OfficeSiteName',
        'officeSiteType'     => 'OfficeSiteType',
        'ownBundleId'        => 'OwnBundleId',
        'ownBundleName'      => 'OwnBundleName',
        'payType'            => 'PayType',
        'policyGroupId'      => 'PolicyGroupId',
        'policyGroupName'    => 'PolicyGroupName',
        'resetType'          => 'ResetType',
        'status'             => 'Status',
        'systemDiskCategory' => 'SystemDiskCategory',
        'systemDiskSize'     => 'SystemDiskSize',
    ];

    public function validate()
    {
        Model::validateRequired('comments', $this->comments, true);
        Model::validateRequired('cpu', $this->cpu, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('creator', $this->creator, true);
        Model::validateRequired('dataDiskCategory', $this->dataDiskCategory, true);
        Model::validateRequired('dataDiskSize', $this->dataDiskSize, true);
        Model::validateRequired('desktopGroupId', $this->desktopGroupId, true);
        Model::validateRequired('desktopGroupName', $this->desktopGroupName, true);
        Model::validateRequired('directoryId', $this->directoryId, true);
        Model::validateRequired('directoryType', $this->directoryType, true);
        Model::validateRequired('endUserCount', $this->endUserCount, true);
        Model::validateRequired('expiredTime', $this->expiredTime, true);
        Model::validateRequired('gpuCount', $this->gpuCount, true);
        Model::validateRequired('gpuSpec', $this->gpuSpec, true);
        Model::validateRequired('keepDuration', $this->keepDuration, true);
        Model::validateRequired('maxDesktopsCount', $this->maxDesktopsCount, true);
        Model::validateRequired('memory', $this->memory, true);
        Model::validateRequired('minDesktopsCount', $this->minDesktopsCount, true);
        Model::validateRequired('officeSiteId', $this->officeSiteId, true);
        Model::validateRequired('officeSiteName', $this->officeSiteName, true);
        Model::validateRequired('officeSiteType', $this->officeSiteType, true);
        Model::validateRequired('ownBundleId', $this->ownBundleId, true);
        Model::validateRequired('ownBundleName', $this->ownBundleName, true);
        Model::validateRequired('payType', $this->payType, true);
        Model::validateRequired('policyGroupId', $this->policyGroupId, true);
        Model::validateRequired('policyGroupName', $this->policyGroupName, true);
        Model::validateRequired('resetType', $this->resetType, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('systemDiskCategory', $this->systemDiskCategory, true);
        Model::validateRequired('systemDiskSize', $this->systemDiskSize, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comments) {
            $res['Comments'] = $this->comments;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->dataDiskCategory) {
            $res['DataDiskCategory'] = $this->dataDiskCategory;
        }
        if (null !== $this->dataDiskSize) {
            $res['DataDiskSize'] = $this->dataDiskSize;
        }
        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }
        if (null !== $this->desktopGroupName) {
            $res['DesktopGroupName'] = $this->desktopGroupName;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->directoryType) {
            $res['DirectoryType'] = $this->directoryType;
        }
        if (null !== $this->endUserCount) {
            $res['EndUserCount'] = $this->endUserCount;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->gpuCount) {
            $res['GpuCount'] = $this->gpuCount;
        }
        if (null !== $this->gpuSpec) {
            $res['GpuSpec'] = $this->gpuSpec;
        }
        if (null !== $this->keepDuration) {
            $res['KeepDuration'] = $this->keepDuration;
        }
        if (null !== $this->maxDesktopsCount) {
            $res['MaxDesktopsCount'] = $this->maxDesktopsCount;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->minDesktopsCount) {
            $res['MinDesktopsCount'] = $this->minDesktopsCount;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }
        if (null !== $this->officeSiteType) {
            $res['OfficeSiteType'] = $this->officeSiteType;
        }
        if (null !== $this->ownBundleId) {
            $res['OwnBundleId'] = $this->ownBundleId;
        }
        if (null !== $this->ownBundleName) {
            $res['OwnBundleName'] = $this->ownBundleName;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }
        if (null !== $this->policyGroupName) {
            $res['PolicyGroupName'] = $this->policyGroupName;
        }
        if (null !== $this->resetType) {
            $res['ResetType'] = $this->resetType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->systemDiskCategory) {
            $res['SystemDiskCategory'] = $this->systemDiskCategory;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return desktopGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comments'])) {
            $model->comments = $map['Comments'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['DataDiskCategory'])) {
            $model->dataDiskCategory = $map['DataDiskCategory'];
        }
        if (isset($map['DataDiskSize'])) {
            $model->dataDiskSize = $map['DataDiskSize'];
        }
        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }
        if (isset($map['DesktopGroupName'])) {
            $model->desktopGroupName = $map['DesktopGroupName'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['DirectoryType'])) {
            $model->directoryType = $map['DirectoryType'];
        }
        if (isset($map['EndUserCount'])) {
            $model->endUserCount = $map['EndUserCount'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['GpuCount'])) {
            $model->gpuCount = $map['GpuCount'];
        }
        if (isset($map['GpuSpec'])) {
            $model->gpuSpec = $map['GpuSpec'];
        }
        if (isset($map['KeepDuration'])) {
            $model->keepDuration = $map['KeepDuration'];
        }
        if (isset($map['MaxDesktopsCount'])) {
            $model->maxDesktopsCount = $map['MaxDesktopsCount'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['MinDesktopsCount'])) {
            $model->minDesktopsCount = $map['MinDesktopsCount'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }
        if (isset($map['OfficeSiteType'])) {
            $model->officeSiteType = $map['OfficeSiteType'];
        }
        if (isset($map['OwnBundleId'])) {
            $model->ownBundleId = $map['OwnBundleId'];
        }
        if (isset($map['OwnBundleName'])) {
            $model->ownBundleName = $map['OwnBundleName'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }
        if (isset($map['PolicyGroupName'])) {
            $model->policyGroupName = $map['PolicyGroupName'];
        }
        if (isset($map['ResetType'])) {
            $model->resetType = $map['ResetType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SystemDiskCategory'])) {
            $model->systemDiskCategory = $map['SystemDiskCategory'];
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }

        return $model;
    }
}
