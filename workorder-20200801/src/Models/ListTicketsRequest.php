<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20200801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Workorder\V20200801\Models\ListTicketsRequest\extraConditionList;

class ListTicketsRequest extends Model
{
    /**
     * @var string
     */
    public $createdAfterTime;

    /**
     * @var string
     */
    public $createdBeforeTime;

    /**
     * @var extraConditionList[]
     */
    public $extraConditionList;

    /**
     * @var string
     */
    public $ids;

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
    public $ticketStatus;
    protected $_name = [
        'createdAfterTime' => 'CreatedAfterTime',
        'createdBeforeTime' => 'CreatedBeforeTime',
        'extraConditionList' => 'ExtraConditionList',
        'ids' => 'Ids',
        'pageSize' => 'PageSize',
        'pageStart' => 'PageStart',
        'productCode' => 'ProductCode',
        'ticketStatus' => 'TicketStatus',
    ];

    public function validate()
    {
        if (\is_array($this->extraConditionList)) {
            Model::validateArray($this->extraConditionList);
        }
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

        if (null !== $this->extraConditionList) {
            if (\is_array($this->extraConditionList)) {
                $res['ExtraConditionList'] = [];
                $n1 = 0;
                foreach ($this->extraConditionList as $item1) {
                    $res['ExtraConditionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ids) {
            $res['Ids'] = $this->ids;
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

        if (isset($map['ExtraConditionList'])) {
            if (!empty($map['ExtraConditionList'])) {
                $model->extraConditionList = [];
                $n1 = 0;
                foreach ($map['ExtraConditionList'] as $item1) {
                    $model->extraConditionList[$n1] = extraConditionList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Ids'])) {
            $model->ids = $map['Ids'];
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

        if (isset($map['TicketStatus'])) {
            $model->ticketStatus = $map['TicketStatus'];
        }

        return $model;
    }
}
