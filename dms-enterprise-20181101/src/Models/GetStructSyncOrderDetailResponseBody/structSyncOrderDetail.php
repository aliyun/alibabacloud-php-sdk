<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncOrderDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncOrderDetailResponseBody\structSyncOrderDetail\sourceDatabaseInfo;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncOrderDetailResponseBody\structSyncOrderDetail\sourceVersionInfo;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncOrderDetailResponseBody\structSyncOrderDetail\tableInfoList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncOrderDetailResponseBody\structSyncOrderDetail\targetDatabaseInfo;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncOrderDetailResponseBody\structSyncOrderDetail\targetVersionInfo;

class structSyncOrderDetail extends Model
{
    /**
     * @var bool
     */
    public $ignoreError;
    /**
     * @var sourceDatabaseInfo
     */
    public $sourceDatabaseInfo;
    /**
     * @var string
     */
    public $sourceType;
    /**
     * @var sourceVersionInfo
     */
    public $sourceVersionInfo;
    /**
     * @var tableInfoList[]
     */
    public $tableInfoList;
    /**
     * @var targetDatabaseInfo
     */
    public $targetDatabaseInfo;
    /**
     * @var string
     */
    public $targetType;
    /**
     * @var targetVersionInfo
     */
    public $targetVersionInfo;
    protected $_name = [
        'ignoreError'        => 'IgnoreError',
        'sourceDatabaseInfo' => 'SourceDatabaseInfo',
        'sourceType'         => 'SourceType',
        'sourceVersionInfo'  => 'SourceVersionInfo',
        'tableInfoList'      => 'TableInfoList',
        'targetDatabaseInfo' => 'TargetDatabaseInfo',
        'targetType'         => 'TargetType',
        'targetVersionInfo'  => 'TargetVersionInfo',
    ];

    public function validate()
    {
        if (null !== $this->sourceDatabaseInfo) {
            $this->sourceDatabaseInfo->validate();
        }
        if (null !== $this->sourceVersionInfo) {
            $this->sourceVersionInfo->validate();
        }
        if (\is_array($this->tableInfoList)) {
            Model::validateArray($this->tableInfoList);
        }
        if (null !== $this->targetDatabaseInfo) {
            $this->targetDatabaseInfo->validate();
        }
        if (null !== $this->targetVersionInfo) {
            $this->targetVersionInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ignoreError) {
            $res['IgnoreError'] = $this->ignoreError;
        }

        if (null !== $this->sourceDatabaseInfo) {
            $res['SourceDatabaseInfo'] = null !== $this->sourceDatabaseInfo ? $this->sourceDatabaseInfo->toArray($noStream) : $this->sourceDatabaseInfo;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->sourceVersionInfo) {
            $res['SourceVersionInfo'] = null !== $this->sourceVersionInfo ? $this->sourceVersionInfo->toArray($noStream) : $this->sourceVersionInfo;
        }

        if (null !== $this->tableInfoList) {
            if (\is_array($this->tableInfoList)) {
                $res['TableInfoList'] = [];
                $n1                   = 0;
                foreach ($this->tableInfoList as $item1) {
                    $res['TableInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->targetDatabaseInfo) {
            $res['TargetDatabaseInfo'] = null !== $this->targetDatabaseInfo ? $this->targetDatabaseInfo->toArray($noStream) : $this->targetDatabaseInfo;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        if (null !== $this->targetVersionInfo) {
            $res['TargetVersionInfo'] = null !== $this->targetVersionInfo ? $this->targetVersionInfo->toArray($noStream) : $this->targetVersionInfo;
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
        if (isset($map['IgnoreError'])) {
            $model->ignoreError = $map['IgnoreError'];
        }

        if (isset($map['SourceDatabaseInfo'])) {
            $model->sourceDatabaseInfo = sourceDatabaseInfo::fromMap($map['SourceDatabaseInfo']);
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['SourceVersionInfo'])) {
            $model->sourceVersionInfo = sourceVersionInfo::fromMap($map['SourceVersionInfo']);
        }

        if (isset($map['TableInfoList'])) {
            if (!empty($map['TableInfoList'])) {
                $model->tableInfoList = [];
                $n1                   = 0;
                foreach ($map['TableInfoList'] as $item1) {
                    $model->tableInfoList[$n1++] = tableInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['TargetDatabaseInfo'])) {
            $model->targetDatabaseInfo = targetDatabaseInfo::fromMap($map['TargetDatabaseInfo']);
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        if (isset($map['TargetVersionInfo'])) {
            $model->targetVersionInfo = targetVersionInfo::fromMap($map['TargetVersionInfo']);
        }

        return $model;
    }
}
