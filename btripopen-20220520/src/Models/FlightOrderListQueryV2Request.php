<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class FlightOrderListQueryV2Request extends Model
{
    /**
     * @var string[]
     */
    public $approveId;

    /**
     * @var string[]
     */
    public $bookerId;

    /**
     * @var string[]
     */
    public $departId;

    /**
     * @example 2022-07-01 00:00:00
     *
     * @var string
     */
    public $endDate;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example CAESBgoEIgIIABgAIhkKFwMSAAAAMUw4ZGViODFlYmM3MYzM4
     *
     * @var string
     */
    public $scrollId;

    /**
     * @example 2022-07-01 00:00:00
     *
     * @var string
     */
    public $startDate;

    /**
     * @var string[]
     */
    public $supplier;

    /**
     * @var string[]
     */
    public $thirdpartApproveId;

    /**
     * @example 2022-07-01 00:00:00
     *
     * @var string
     */
    public $updateEndDate;

    /**
     * @example 2022-07-01 00:00:00
     *
     * @var string
     */
    public $updateStartDate;
    protected $_name = [
        'approveId'          => 'approve_id',
        'bookerId'           => 'booker_id',
        'departId'           => 'depart_id',
        'endDate'            => 'end_date',
        'pageSize'           => 'page_Size',
        'scrollId'           => 'scroll_id',
        'startDate'          => 'start_date',
        'supplier'           => 'supplier',
        'thirdpartApproveId' => 'thirdpart_approve_id',
        'updateEndDate'      => 'update_end_date',
        'updateStartDate'    => 'update_start_date',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approveId) {
            $res['approve_id'] = $this->approveId;
        }
        if (null !== $this->bookerId) {
            $res['booker_id'] = $this->bookerId;
        }
        if (null !== $this->departId) {
            $res['depart_id'] = $this->departId;
        }
        if (null !== $this->endDate) {
            $res['end_date'] = $this->endDate;
        }
        if (null !== $this->pageSize) {
            $res['page_Size'] = $this->pageSize;
        }
        if (null !== $this->scrollId) {
            $res['scroll_id'] = $this->scrollId;
        }
        if (null !== $this->startDate) {
            $res['start_date'] = $this->startDate;
        }
        if (null !== $this->supplier) {
            $res['supplier'] = $this->supplier;
        }
        if (null !== $this->thirdpartApproveId) {
            $res['thirdpart_approve_id'] = $this->thirdpartApproveId;
        }
        if (null !== $this->updateEndDate) {
            $res['update_end_date'] = $this->updateEndDate;
        }
        if (null !== $this->updateStartDate) {
            $res['update_start_date'] = $this->updateStartDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FlightOrderListQueryV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['approve_id'])) {
            if (!empty($map['approve_id'])) {
                $model->approveId = $map['approve_id'];
            }
        }
        if (isset($map['booker_id'])) {
            if (!empty($map['booker_id'])) {
                $model->bookerId = $map['booker_id'];
            }
        }
        if (isset($map['depart_id'])) {
            if (!empty($map['depart_id'])) {
                $model->departId = $map['depart_id'];
            }
        }
        if (isset($map['end_date'])) {
            $model->endDate = $map['end_date'];
        }
        if (isset($map['page_Size'])) {
            $model->pageSize = $map['page_Size'];
        }
        if (isset($map['scroll_id'])) {
            $model->scrollId = $map['scroll_id'];
        }
        if (isset($map['start_date'])) {
            $model->startDate = $map['start_date'];
        }
        if (isset($map['supplier'])) {
            if (!empty($map['supplier'])) {
                $model->supplier = $map['supplier'];
            }
        }
        if (isset($map['thirdpart_approve_id'])) {
            if (!empty($map['thirdpart_approve_id'])) {
                $model->thirdpartApproveId = $map['thirdpart_approve_id'];
            }
        }
        if (isset($map['update_end_date'])) {
            $model->updateEndDate = $map['update_end_date'];
        }
        if (isset($map['update_start_date'])) {
            $model->updateStartDate = $map['update_start_date'];
        }

        return $model;
    }
}
