<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Workorder\V20210610\Models;

use AlibabaCloud\Tea\Model;

class ListTicketsShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $endDate;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $startDate;

    /**
     * @var string[]
     */
    public $statusList;

    /**
     * @var string
     */
    public $ticketId;

    /**
     * @var string
     */
    public $ticketIdListShrink;
    protected $_name = [
        'endDate'            => 'EndDate',
        'keyword'            => 'Keyword',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'startDate'          => 'StartDate',
        'statusList'         => 'StatusList',
        'ticketId'           => 'TicketId',
        'ticketIdListShrink' => 'TicketIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->statusList) {
            $res['StatusList'] = $this->statusList;
        }
        if (null !== $this->ticketId) {
            $res['TicketId'] = $this->ticketId;
        }
        if (null !== $this->ticketIdListShrink) {
            $res['TicketIdList'] = $this->ticketIdListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTicketsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = $map['StatusList'];
            }
        }
        if (isset($map['TicketId'])) {
            $model->ticketId = $map['TicketId'];
        }
        if (isset($map['TicketIdList'])) {
            $model->ticketIdListShrink = $map['TicketIdList'];
        }

        return $model;
    }
}
