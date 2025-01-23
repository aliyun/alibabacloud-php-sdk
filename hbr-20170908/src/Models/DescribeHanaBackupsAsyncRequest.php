<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;

class DescribeHanaBackupsAsyncRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $databaseName;
    /**
     * @var bool
     */
    public $includeDifferential;
    /**
     * @var bool
     */
    public $includeIncremental;
    /**
     * @var bool
     */
    public $includeLog;
    /**
     * @var int
     */
    public $logPosition;
    /**
     * @var string
     */
    public $mode;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var int
     */
    public $recoveryPointInTime;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $source;
    /**
     * @var string
     */
    public $sourceClusterId;
    /**
     * @var bool
     */
    public $systemCopy;
    /**
     * @var bool
     */
    public $useBackint;
    /**
     * @var string
     */
    public $vaultId;
    /**
     * @var int
     */
    public $volumeId;
    protected $_name = [
        'clusterId'           => 'ClusterId',
        'databaseName'        => 'DatabaseName',
        'includeDifferential' => 'IncludeDifferential',
        'includeIncremental'  => 'IncludeIncremental',
        'includeLog'          => 'IncludeLog',
        'logPosition'         => 'LogPosition',
        'mode'                => 'Mode',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'recoveryPointInTime' => 'RecoveryPointInTime',
        'resourceGroupId'     => 'ResourceGroupId',
        'source'              => 'Source',
        'sourceClusterId'     => 'SourceClusterId',
        'systemCopy'          => 'SystemCopy',
        'useBackint'          => 'UseBackint',
        'vaultId'             => 'VaultId',
        'volumeId'            => 'VolumeId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }

        if (null !== $this->includeDifferential) {
            $res['IncludeDifferential'] = $this->includeDifferential;
        }

        if (null !== $this->includeIncremental) {
            $res['IncludeIncremental'] = $this->includeIncremental;
        }

        if (null !== $this->includeLog) {
            $res['IncludeLog'] = $this->includeLog;
        }

        if (null !== $this->logPosition) {
            $res['LogPosition'] = $this->logPosition;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->recoveryPointInTime) {
            $res['RecoveryPointInTime'] = $this->recoveryPointInTime;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->sourceClusterId) {
            $res['SourceClusterId'] = $this->sourceClusterId;
        }

        if (null !== $this->systemCopy) {
            $res['SystemCopy'] = $this->systemCopy;
        }

        if (null !== $this->useBackint) {
            $res['UseBackint'] = $this->useBackint;
        }

        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }

        if (null !== $this->volumeId) {
            $res['VolumeId'] = $this->volumeId;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }

        if (isset($map['IncludeDifferential'])) {
            $model->includeDifferential = $map['IncludeDifferential'];
        }

        if (isset($map['IncludeIncremental'])) {
            $model->includeIncremental = $map['IncludeIncremental'];
        }

        if (isset($map['IncludeLog'])) {
            $model->includeLog = $map['IncludeLog'];
        }

        if (isset($map['LogPosition'])) {
            $model->logPosition = $map['LogPosition'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RecoveryPointInTime'])) {
            $model->recoveryPointInTime = $map['RecoveryPointInTime'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['SourceClusterId'])) {
            $model->sourceClusterId = $map['SourceClusterId'];
        }

        if (isset($map['SystemCopy'])) {
            $model->systemCopy = $map['SystemCopy'];
        }

        if (isset($map['UseBackint'])) {
            $model->useBackint = $map['UseBackint'];
        }

        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        if (isset($map['VolumeId'])) {
            $model->volumeId = $map['VolumeId'];
        }

        return $model;
    }
}
