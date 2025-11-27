<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Dara\Model;

class GetPurchaseControlRecordRequest extends Model
{
    /**
     * @var int
     */
    public $customerUID;

    /**
     * @var string
     */
    public $operationTime;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'customerUID' => 'CustomerUID',
        'operationTime' => 'OperationTime',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customerUID) {
            $res['CustomerUID'] = $this->customerUID;
        }

        if (null !== $this->operationTime) {
            $res['OperationTime'] = $this->operationTime;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['CustomerUID'])) {
            $model->customerUID = $map['CustomerUID'];
        }

        if (isset($map['OperationTime'])) {
            $model->operationTime = $map['OperationTime'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
