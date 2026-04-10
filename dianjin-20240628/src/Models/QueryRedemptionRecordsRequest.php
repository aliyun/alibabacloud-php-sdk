<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;

class QueryRedemptionRecordsRequest extends Model
{
    /**
     * @var string
     */
    public $externalUserId;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $redemptionOrderNo;
    protected $_name = [
        'externalUserId' => 'externalUserId',
        'page' => 'page',
        'pageSize' => 'pageSize',
        'redemptionOrderNo' => 'redemptionOrderNo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->externalUserId) {
            $res['externalUserId'] = $this->externalUserId;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->redemptionOrderNo) {
            $res['redemptionOrderNo'] = $this->redemptionOrderNo;
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
        if (isset($map['externalUserId'])) {
            $model->externalUserId = $map['externalUserId'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['redemptionOrderNo'])) {
            $model->redemptionOrderNo = $map['redemptionOrderNo'];
        }

        return $model;
    }
}
