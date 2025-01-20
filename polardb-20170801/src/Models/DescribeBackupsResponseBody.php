<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeBackupsResponseBody\items;

class DescribeBackupsResponseBody extends Model
{
    /**
     * @var items
     */
    public $items;
    /**
     * @var string
     */
    public $pageNumber;
    /**
     * @var string
     */
    public $pageRecordCount;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $totalLevel2BackupSize;
    /**
     * @var string
     */
    public $totalRecordCount;
    protected $_name = [
        'items'                 => 'Items',
        'pageNumber'            => 'PageNumber',
        'pageRecordCount'       => 'PageRecordCount',
        'requestId'             => 'RequestId',
        'totalLevel2BackupSize' => 'TotalLevel2BackupSize',
        'totalRecordCount'      => 'TotalRecordCount',
    ];

    public function validate()
    {
        if (null !== $this->items) {
            $this->items->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->items) {
            $res['Items'] = null !== $this->items ? $this->items->toArray($noStream) : $this->items;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalLevel2BackupSize) {
            $res['TotalLevel2BackupSize'] = $this->totalLevel2BackupSize;
        }

        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
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
        if (isset($map['Items'])) {
            $model->items = items::fromMap($map['Items']);
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalLevel2BackupSize'])) {
            $model->totalLevel2BackupSize = $map['TotalLevel2BackupSize'];
        }

        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
