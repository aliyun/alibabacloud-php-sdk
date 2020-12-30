<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20200326\Models;

use AlibabaCloud\Tea\Model;

class ListTicketsRequest extends Model
{
    /**
     * @var string
     */
    public $ids;

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
    public $productCode;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $ticketStatus;

    /**
     * @var int
     */
    public $pageStart;

    /**
     * @var string
     */
    public $subUserId;

    /**
     * @var string
     */
    public $language;
    protected $_name = [
        'ids'               => 'Ids',
        'createdAfterTime'  => 'CreatedAfterTime',
        'createdBeforeTime' => 'CreatedBeforeTime',
        'productCode'       => 'ProductCode',
        'pageSize'          => 'PageSize',
        'ticketStatus'      => 'TicketStatus',
        'pageStart'         => 'PageStart',
        'subUserId'         => 'SubUserId',
        'language'          => 'Language',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
        }
        if (null !== $this->createdAfterTime) {
            $res['CreatedAfterTime'] = $this->createdAfterTime;
        }
        if (null !== $this->createdBeforeTime) {
            $res['CreatedBeforeTime'] = $this->createdBeforeTime;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->ticketStatus) {
            $res['TicketStatus'] = $this->ticketStatus;
        }
        if (null !== $this->pageStart) {
            $res['PageStart'] = $this->pageStart;
        }
        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTicketsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
        }
        if (isset($map['CreatedAfterTime'])) {
            $model->createdAfterTime = $map['CreatedAfterTime'];
        }
        if (isset($map['CreatedBeforeTime'])) {
            $model->createdBeforeTime = $map['CreatedBeforeTime'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TicketStatus'])) {
            $model->ticketStatus = $map['TicketStatus'];
        }
        if (isset($map['PageStart'])) {
            $model->pageStart = $map['PageStart'];
        }
        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        return $model;
    }
}
