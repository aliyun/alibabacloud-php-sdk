<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderChangeDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderChangeDetailResponseBody\module\roomInfoList;

class module extends Model
{
    /**
     * @var string
     */
    public $changeOrderId;

    /**
     * @var int
     */
    public $changeType;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $disOrderId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $remarks;

    /**
     * @var roomInfoList[]
     */
    public $roomInfoList;

    /**
     * @var string
     */
    public $saleOrderId;

    /**
     * @var int
     */
    public $source;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $workOrderId;
    protected $_name = [
        'changeOrderId' => 'change_order_id',
        'changeType' => 'change_type',
        'corpId' => 'corp_id',
        'disOrderId' => 'dis_order_id',
        'gmtCreate' => 'gmt_create',
        'gmtModified' => 'gmt_modified',
        'reason' => 'reason',
        'remarks' => 'remarks',
        'roomInfoList' => 'room_info_list',
        'saleOrderId' => 'sale_order_id',
        'source' => 'source',
        'status' => 'status',
        'workOrderId' => 'work_order_id',
    ];

    public function validate()
    {
        if (\is_array($this->roomInfoList)) {
            Model::validateArray($this->roomInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeOrderId) {
            $res['change_order_id'] = $this->changeOrderId;
        }

        if (null !== $this->changeType) {
            $res['change_type'] = $this->changeType;
        }

        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }

        if (null !== $this->disOrderId) {
            $res['dis_order_id'] = $this->disOrderId;
        }

        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }

        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }

        if (null !== $this->remarks) {
            $res['remarks'] = $this->remarks;
        }

        if (null !== $this->roomInfoList) {
            if (\is_array($this->roomInfoList)) {
                $res['room_info_list'] = [];
                $n1 = 0;
                foreach ($this->roomInfoList as $item1) {
                    $res['room_info_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->saleOrderId) {
            $res['sale_order_id'] = $this->saleOrderId;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->workOrderId) {
            $res['work_order_id'] = $this->workOrderId;
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
        if (isset($map['change_order_id'])) {
            $model->changeOrderId = $map['change_order_id'];
        }

        if (isset($map['change_type'])) {
            $model->changeType = $map['change_type'];
        }

        if (isset($map['corp_id'])) {
            $model->corpId = $map['corp_id'];
        }

        if (isset($map['dis_order_id'])) {
            $model->disOrderId = $map['dis_order_id'];
        }

        if (isset($map['gmt_create'])) {
            $model->gmtCreate = $map['gmt_create'];
        }

        if (isset($map['gmt_modified'])) {
            $model->gmtModified = $map['gmt_modified'];
        }

        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }

        if (isset($map['remarks'])) {
            $model->remarks = $map['remarks'];
        }

        if (isset($map['room_info_list'])) {
            if (!empty($map['room_info_list'])) {
                $model->roomInfoList = [];
                $n1 = 0;
                foreach ($map['room_info_list'] as $item1) {
                    $model->roomInfoList[$n1] = roomInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['sale_order_id'])) {
            $model->saleOrderId = $map['sale_order_id'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['work_order_id'])) {
            $model->workOrderId = $map['work_order_id'];
        }

        return $model;
    }
}
