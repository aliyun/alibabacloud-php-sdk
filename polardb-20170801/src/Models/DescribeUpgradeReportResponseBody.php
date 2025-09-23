<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeUpgradeReportResponseBody\items;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeUpgradeReportResponseBody\upgradeReportList;

class DescribeUpgradeReportResponseBody extends Model
{
    /**
     * @var string
     */
    public $details;

    /**
     * @var string
     */
    public $dstDBType;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @var int
     */
    public $itemsSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sourceDBClusterId;

    /**
     * @var string
     */
    public $srcDBType;

    /**
     * @var string
     */
    public $srcDeleted;

    /**
     * @var int
     */
    public $totalSize;

    /**
     * @var string
     */
    public $type;

    /**
     * @var upgradeReportList[]
     */
    public $upgradeReportList;
    protected $_name = [
        'details' => 'Details',
        'dstDBType' => 'DstDBType',
        'items' => 'Items',
        'itemsSize' => 'ItemsSize',
        'requestId' => 'RequestId',
        'sourceDBClusterId' => 'SourceDBClusterId',
        'srcDBType' => 'SrcDBType',
        'srcDeleted' => 'SrcDeleted',
        'totalSize' => 'TotalSize',
        'type' => 'Type',
        'upgradeReportList' => 'UpgradeReportList',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        if (\is_array($this->upgradeReportList)) {
            Model::validateArray($this->upgradeReportList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->details) {
            $res['Details'] = $this->details;
        }

        if (null !== $this->dstDBType) {
            $res['DstDBType'] = $this->dstDBType;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['Items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['Items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->itemsSize) {
            $res['ItemsSize'] = $this->itemsSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sourceDBClusterId) {
            $res['SourceDBClusterId'] = $this->sourceDBClusterId;
        }

        if (null !== $this->srcDBType) {
            $res['SrcDBType'] = $this->srcDBType;
        }

        if (null !== $this->srcDeleted) {
            $res['SrcDeleted'] = $this->srcDeleted;
        }

        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->upgradeReportList) {
            if (\is_array($this->upgradeReportList)) {
                $res['UpgradeReportList'] = [];
                $n1 = 0;
                foreach ($this->upgradeReportList as $item1) {
                    $res['UpgradeReportList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Details'])) {
            $model->details = $map['Details'];
        }

        if (isset($map['DstDBType'])) {
            $model->dstDBType = $map['DstDBType'];
        }

        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['Items'] as $item1) {
                    $model->items[$n1] = items::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ItemsSize'])) {
            $model->itemsSize = $map['ItemsSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SourceDBClusterId'])) {
            $model->sourceDBClusterId = $map['SourceDBClusterId'];
        }

        if (isset($map['SrcDBType'])) {
            $model->srcDBType = $map['SrcDBType'];
        }

        if (isset($map['SrcDeleted'])) {
            $model->srcDeleted = $map['SrcDeleted'];
        }

        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UpgradeReportList'])) {
            if (!empty($map['UpgradeReportList'])) {
                $model->upgradeReportList = [];
                $n1 = 0;
                foreach ($map['UpgradeReportList'] as $item1) {
                    $model->upgradeReportList[$n1] = upgradeReportList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
