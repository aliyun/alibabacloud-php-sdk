<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncOrderDetailResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncOrderDetailResponseBody\structSyncOrderDetail\sourceDatabaseInfo;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncOrderDetailResponseBody\structSyncOrderDetail\sourceVersionInfo;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncOrderDetailResponseBody\structSyncOrderDetail\tableInfoList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncOrderDetailResponseBody\structSyncOrderDetail\targetDatabaseInfo;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncOrderDetailResponseBody\structSyncOrderDetail\targetVersionInfo;
use AlibabaCloud\Tea\Model;

class structSyncOrderDetail extends Model
{
    /**
     * @var sourceDatabaseInfo
     */
    public $sourceDatabaseInfo;

    /**
     * @var targetDatabaseInfo
     */
    public $targetDatabaseInfo;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var sourceVersionInfo
     */
    public $sourceVersionInfo;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var targetVersionInfo
     */
    public $targetVersionInfo;

    /**
     * @var tableInfoList[]
     */
    public $tableInfoList;

    /**
     * @var bool
     */
    public $ignoreError;
    protected $_name = [
        'sourceDatabaseInfo' => 'SourceDatabaseInfo',
        'targetDatabaseInfo' => 'TargetDatabaseInfo',
        'sourceType'         => 'SourceType',
        'sourceVersionInfo'  => 'SourceVersionInfo',
        'targetType'         => 'TargetType',
        'targetVersionInfo'  => 'TargetVersionInfo',
        'tableInfoList'      => 'TableInfoList',
        'ignoreError'        => 'IgnoreError',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceDatabaseInfo) {
            $res['SourceDatabaseInfo'] = null !== $this->sourceDatabaseInfo ? $this->sourceDatabaseInfo->toMap() : null;
        }
        if (null !== $this->targetDatabaseInfo) {
            $res['TargetDatabaseInfo'] = null !== $this->targetDatabaseInfo ? $this->targetDatabaseInfo->toMap() : null;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->sourceVersionInfo) {
            $res['SourceVersionInfo'] = null !== $this->sourceVersionInfo ? $this->sourceVersionInfo->toMap() : null;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }
        if (null !== $this->targetVersionInfo) {
            $res['TargetVersionInfo'] = null !== $this->targetVersionInfo ? $this->targetVersionInfo->toMap() : null;
        }
        if (null !== $this->tableInfoList) {
            $res['TableInfoList'] = [];
            if (null !== $this->tableInfoList && \is_array($this->tableInfoList)) {
                $n = 0;
                foreach ($this->tableInfoList as $item) {
                    $res['TableInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ignoreError) {
            $res['IgnoreError'] = $this->ignoreError;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return structSyncOrderDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceDatabaseInfo'])) {
            $model->sourceDatabaseInfo = sourceDatabaseInfo::fromMap($map['SourceDatabaseInfo']);
        }
        if (isset($map['TargetDatabaseInfo'])) {
            $model->targetDatabaseInfo = targetDatabaseInfo::fromMap($map['TargetDatabaseInfo']);
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['SourceVersionInfo'])) {
            $model->sourceVersionInfo = sourceVersionInfo::fromMap($map['SourceVersionInfo']);
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }
        if (isset($map['TargetVersionInfo'])) {
            $model->targetVersionInfo = targetVersionInfo::fromMap($map['TargetVersionInfo']);
        }
        if (isset($map['TableInfoList'])) {
            if (!empty($map['TableInfoList'])) {
                $model->tableInfoList = [];
                $n                    = 0;
                foreach ($map['TableInfoList'] as $item) {
                    $model->tableInfoList[$n++] = null !== $item ? tableInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IgnoreError'])) {
            $model->ignoreError = $map['IgnoreError'];
        }

        return $model;
    }
}
