<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStoragePartitionsInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStoragePartitionsInfoResponseBody\data\storagePartitionInfoList;

class data extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var storagePartitionInfoList[]
     */
    public $storagePartitionInfoList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'date' => 'date',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'storagePartitionInfoList' => 'storagePartitionInfoList',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->storagePartitionInfoList)) {
            Model::validateArray($this->storagePartitionInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->storagePartitionInfoList) {
            if (\is_array($this->storagePartitionInfoList)) {
                $res['storagePartitionInfoList'] = [];
                $n1 = 0;
                foreach ($this->storagePartitionInfoList as $item1) {
                    $res['storagePartitionInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['date'])) {
            $model->date = $map['date'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['storagePartitionInfoList'])) {
            if (!empty($map['storagePartitionInfoList'])) {
                $model->storagePartitionInfoList = [];
                $n1 = 0;
                foreach ($map['storagePartitionInfoList'] as $item1) {
                    $model->storagePartitionInfoList[$n1] = storagePartitionInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
