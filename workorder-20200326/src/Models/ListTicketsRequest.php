<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20200326\Models;

use AlibabaCloud\Dara\Model;

class ListTicketsRequest extends Model
{
    /**
     * @var int
     */
    public $createdAfterTime;

    /**
     * @var int
     */
    public $createdBeforeTime;

    /**
     * @var string
     */
    public $ids;

    /**
     * @var string
     */
    public $language;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageStart;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $subUserId;

    /**
     * @var string
     */
    public $ticketStatus;
    protected $_name = [
        'createdAfterTime' => 'CreatedAfterTime',
        'createdBeforeTime' => 'CreatedBeforeTime',
        'ids' => 'Ids',
        'language' => 'Language',
        'pageSize' => 'PageSize',
        'pageStart' => 'PageStart',
        'productCode' => 'ProductCode',
        'subUserId' => 'SubUserId',
        'ticketStatus' => 'TicketStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAfterTime) {
            $res['CreatedAfterTime'] = $this->createdAfterTime;
        }

        if (null !== $this->createdBeforeTime) {
            $res['CreatedBeforeTime'] = $this->createdBeforeTime;
        }

        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->pageStart) {
            $res['PageStart'] = $this->pageStart;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }

        if (null !== $this->ticketStatus) {
            $res['TicketStatus'] = $this->ticketStatus;
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
        if (isset($map['CreatedAfterTime'])) {
            $model->createdAfterTime = $map['CreatedAfterTime'];
        }

        if (isset($map['CreatedBeforeTime'])) {
            $model->createdBeforeTime = $map['CreatedBeforeTime'];
        }

        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PageStart'])) {
            $model->pageStart = $map['PageStart'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }

        if (isset($map['TicketStatus'])) {
            $model->ticketStatus = $map['TicketStatus'];
        }

        return $model;
    }
}
