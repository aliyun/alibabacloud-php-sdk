<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormFsUsedDetailResponseBody\LStorageUsageList;

class GetLindormFsUsedDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @var string
     */
    public $fsCapacity;

    /**
     * @var string
     */
    public $fsCapacityCold;

    /**
     * @var string
     */
    public $fsCapacityHot;

    /**
     * @var string
     */
    public $fsUsedCold;

    /**
     * @var string
     */
    public $fsUsedColdOnLindormSearch;

    /**
     * @var string
     */
    public $fsUsedColdOnLindormTSDB;

    /**
     * @var string
     */
    public $fsUsedColdOnLindormTable;

    /**
     * @var string
     */
    public $fsUsedHot;

    /**
     * @var string
     */
    public $fsUsedHotOnLindormSearch;

    /**
     * @var string
     */
    public $fsUsedHotOnLindormTSDB;

    /**
     * @var string
     */
    public $fsUsedHotOnLindormTable;

    /**
     * @var string
     */
    public $fsUsedOnLindormSearch;

    /**
     * @var string
     */
    public $fsUsedOnLindormTSDB;

    /**
     * @var string
     */
    public $fsUsedOnLindormTable;

    /**
     * @var string
     */
    public $fsUsedOnLindormTableData;

    /**
     * @var string
     */
    public $fsUsedOnLindormTableWAL;

    /**
     * @var LStorageUsageList[]
     */
    public $LStorageUsageList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $valid;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'fsCapacity' => 'FsCapacity',
        'fsCapacityCold' => 'FsCapacityCold',
        'fsCapacityHot' => 'FsCapacityHot',
        'fsUsedCold' => 'FsUsedCold',
        'fsUsedColdOnLindormSearch' => 'FsUsedColdOnLindormSearch',
        'fsUsedColdOnLindormTSDB' => 'FsUsedColdOnLindormTSDB',
        'fsUsedColdOnLindormTable' => 'FsUsedColdOnLindormTable',
        'fsUsedHot' => 'FsUsedHot',
        'fsUsedHotOnLindormSearch' => 'FsUsedHotOnLindormSearch',
        'fsUsedHotOnLindormTSDB' => 'FsUsedHotOnLindormTSDB',
        'fsUsedHotOnLindormTable' => 'FsUsedHotOnLindormTable',
        'fsUsedOnLindormSearch' => 'FsUsedOnLindormSearch',
        'fsUsedOnLindormTSDB' => 'FsUsedOnLindormTSDB',
        'fsUsedOnLindormTable' => 'FsUsedOnLindormTable',
        'fsUsedOnLindormTableData' => 'FsUsedOnLindormTableData',
        'fsUsedOnLindormTableWAL' => 'FsUsedOnLindormTableWAL',
        'LStorageUsageList' => 'LStorageUsageList',
        'requestId' => 'RequestId',
        'valid' => 'Valid',
    ];

    public function validate()
    {
        if (\is_array($this->LStorageUsageList)) {
            Model::validateArray($this->LStorageUsageList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }

        if (null !== $this->fsCapacity) {
            $res['FsCapacity'] = $this->fsCapacity;
        }

        if (null !== $this->fsCapacityCold) {
            $res['FsCapacityCold'] = $this->fsCapacityCold;
        }

        if (null !== $this->fsCapacityHot) {
            $res['FsCapacityHot'] = $this->fsCapacityHot;
        }

        if (null !== $this->fsUsedCold) {
            $res['FsUsedCold'] = $this->fsUsedCold;
        }

        if (null !== $this->fsUsedColdOnLindormSearch) {
            $res['FsUsedColdOnLindormSearch'] = $this->fsUsedColdOnLindormSearch;
        }

        if (null !== $this->fsUsedColdOnLindormTSDB) {
            $res['FsUsedColdOnLindormTSDB'] = $this->fsUsedColdOnLindormTSDB;
        }

        if (null !== $this->fsUsedColdOnLindormTable) {
            $res['FsUsedColdOnLindormTable'] = $this->fsUsedColdOnLindormTable;
        }

        if (null !== $this->fsUsedHot) {
            $res['FsUsedHot'] = $this->fsUsedHot;
        }

        if (null !== $this->fsUsedHotOnLindormSearch) {
            $res['FsUsedHotOnLindormSearch'] = $this->fsUsedHotOnLindormSearch;
        }

        if (null !== $this->fsUsedHotOnLindormTSDB) {
            $res['FsUsedHotOnLindormTSDB'] = $this->fsUsedHotOnLindormTSDB;
        }

        if (null !== $this->fsUsedHotOnLindormTable) {
            $res['FsUsedHotOnLindormTable'] = $this->fsUsedHotOnLindormTable;
        }

        if (null !== $this->fsUsedOnLindormSearch) {
            $res['FsUsedOnLindormSearch'] = $this->fsUsedOnLindormSearch;
        }

        if (null !== $this->fsUsedOnLindormTSDB) {
            $res['FsUsedOnLindormTSDB'] = $this->fsUsedOnLindormTSDB;
        }

        if (null !== $this->fsUsedOnLindormTable) {
            $res['FsUsedOnLindormTable'] = $this->fsUsedOnLindormTable;
        }

        if (null !== $this->fsUsedOnLindormTableData) {
            $res['FsUsedOnLindormTableData'] = $this->fsUsedOnLindormTableData;
        }

        if (null !== $this->fsUsedOnLindormTableWAL) {
            $res['FsUsedOnLindormTableWAL'] = $this->fsUsedOnLindormTableWAL;
        }

        if (null !== $this->LStorageUsageList) {
            if (\is_array($this->LStorageUsageList)) {
                $res['LStorageUsageList'] = [];
                $n1 = 0;
                foreach ($this->LStorageUsageList as $item1) {
                    $res['LStorageUsageList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->valid) {
            $res['Valid'] = $this->valid;
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }

        if (isset($map['FsCapacity'])) {
            $model->fsCapacity = $map['FsCapacity'];
        }

        if (isset($map['FsCapacityCold'])) {
            $model->fsCapacityCold = $map['FsCapacityCold'];
        }

        if (isset($map['FsCapacityHot'])) {
            $model->fsCapacityHot = $map['FsCapacityHot'];
        }

        if (isset($map['FsUsedCold'])) {
            $model->fsUsedCold = $map['FsUsedCold'];
        }

        if (isset($map['FsUsedColdOnLindormSearch'])) {
            $model->fsUsedColdOnLindormSearch = $map['FsUsedColdOnLindormSearch'];
        }

        if (isset($map['FsUsedColdOnLindormTSDB'])) {
            $model->fsUsedColdOnLindormTSDB = $map['FsUsedColdOnLindormTSDB'];
        }

        if (isset($map['FsUsedColdOnLindormTable'])) {
            $model->fsUsedColdOnLindormTable = $map['FsUsedColdOnLindormTable'];
        }

        if (isset($map['FsUsedHot'])) {
            $model->fsUsedHot = $map['FsUsedHot'];
        }

        if (isset($map['FsUsedHotOnLindormSearch'])) {
            $model->fsUsedHotOnLindormSearch = $map['FsUsedHotOnLindormSearch'];
        }

        if (isset($map['FsUsedHotOnLindormTSDB'])) {
            $model->fsUsedHotOnLindormTSDB = $map['FsUsedHotOnLindormTSDB'];
        }

        if (isset($map['FsUsedHotOnLindormTable'])) {
            $model->fsUsedHotOnLindormTable = $map['FsUsedHotOnLindormTable'];
        }

        if (isset($map['FsUsedOnLindormSearch'])) {
            $model->fsUsedOnLindormSearch = $map['FsUsedOnLindormSearch'];
        }

        if (isset($map['FsUsedOnLindormTSDB'])) {
            $model->fsUsedOnLindormTSDB = $map['FsUsedOnLindormTSDB'];
        }

        if (isset($map['FsUsedOnLindormTable'])) {
            $model->fsUsedOnLindormTable = $map['FsUsedOnLindormTable'];
        }

        if (isset($map['FsUsedOnLindormTableData'])) {
            $model->fsUsedOnLindormTableData = $map['FsUsedOnLindormTableData'];
        }

        if (isset($map['FsUsedOnLindormTableWAL'])) {
            $model->fsUsedOnLindormTableWAL = $map['FsUsedOnLindormTableWAL'];
        }

        if (isset($map['LStorageUsageList'])) {
            if (!empty($map['LStorageUsageList'])) {
                $model->LStorageUsageList = [];
                $n1 = 0;
                foreach ($map['LStorageUsageList'] as $item1) {
                    $model->LStorageUsageList[$n1] = LStorageUsageList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Valid'])) {
            $model->valid = $map['Valid'];
        }

        return $model;
    }
}
