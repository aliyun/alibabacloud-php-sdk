<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStorageTablesInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListStorageTablesInfoResponseBody\data\storageTableInfoList;

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
     * @var storageTableInfoList[]
     */
    public $storageTableInfoList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'date' => 'date',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'storageTableInfoList' => 'storageTableInfoList',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->storageTableInfoList)) {
            Model::validateArray($this->storageTableInfoList);
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

        if (null !== $this->storageTableInfoList) {
            if (\is_array($this->storageTableInfoList)) {
                $res['storageTableInfoList'] = [];
                $n1 = 0;
                foreach ($this->storageTableInfoList as $item1) {
                    $res['storageTableInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['storageTableInfoList'])) {
            if (!empty($map['storageTableInfoList'])) {
                $model->storageTableInfoList = [];
                $n1 = 0;
                foreach ($map['storageTableInfoList'] as $item1) {
                    $model->storageTableInfoList[$n1] = storageTableInfoList::fromMap($item1);
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
