<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class FlightOrderListQueryV2ShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $approveIdShrink;

    /**
     * @var string
     */
    public $bookerIdShrink;

    /**
     * @var string
     */
    public $departIdShrink;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $scrollId;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $supplierShrink;

    /**
     * @var string
     */
    public $thirdpartApproveIdShrink;

    /**
     * @var string
     */
    public $updateEndDate;

    /**
     * @var string
     */
    public $updateStartDate;
    protected $_name = [
        'approveIdShrink' => 'approve_id',
        'bookerIdShrink' => 'booker_id',
        'departIdShrink' => 'depart_id',
        'endDate' => 'end_date',
        'pageSize' => 'page_Size',
        'scrollId' => 'scroll_id',
        'startDate' => 'start_date',
        'supplierShrink' => 'supplier',
        'thirdpartApproveIdShrink' => 'thirdpart_approve_id',
        'updateEndDate' => 'update_end_date',
        'updateStartDate' => 'update_start_date',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->approveIdShrink) {
            $res['approve_id'] = $this->approveIdShrink;
        }

        if (null !== $this->bookerIdShrink) {
            $res['booker_id'] = $this->bookerIdShrink;
        }

        if (null !== $this->departIdShrink) {
            $res['depart_id'] = $this->departIdShrink;
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

        if (null !== $this->supplierShrink) {
            $res['supplier'] = $this->supplierShrink;
        }

        if (null !== $this->thirdpartApproveIdShrink) {
            $res['thirdpart_approve_id'] = $this->thirdpartApproveIdShrink;
        }

        if (null !== $this->updateEndDate) {
            $res['update_end_date'] = $this->updateEndDate;
        }

        if (null !== $this->updateStartDate) {
            $res['update_start_date'] = $this->updateStartDate;
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
        if (isset($map['approve_id'])) {
            $model->approveIdShrink = $map['approve_id'];
        }

        if (isset($map['booker_id'])) {
            $model->bookerIdShrink = $map['booker_id'];
        }

        if (isset($map['depart_id'])) {
            $model->departIdShrink = $map['depart_id'];
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
            $model->supplierShrink = $map['supplier'];
        }

        if (isset($map['thirdpart_approve_id'])) {
            $model->thirdpartApproveIdShrink = $map['thirdpart_approve_id'];
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
