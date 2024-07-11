<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderChangeDetailResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderChangeDetailResponseBody\module\roomInfoList;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example 1234
     *
     * @var string
     */
    public $changeOrderId;

    /**
     * @example 0
     *
     * @var int
     */
    public $changeType;

    /**
     * @example open12ih3c8jb8o47v10B4r4josN00
     *
     * @var string
     */
    public $corpId;

    /**
     * @example dis1234
     *
     * @var string
     */
    public $disOrderId;

    /**
     * @example 2024-07-07 13:42:49
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2024-07-07 13:42:49
     *
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
     * @example 1402002197440511306
     *
     * @var string
     */
    public $saleOrderId;

    /**
     * @example 0
     *
     * @var int
     */
    public $source;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 2505048378320666
     *
     * @var string
     */
    public $workOrderId;
    protected $_name = [
        'changeOrderId' => 'change_order_id',
        'changeType'    => 'change_type',
        'corpId'        => 'corp_id',
        'disOrderId'    => 'dis_order_id',
        'gmtCreate'     => 'gmt_create',
        'gmtModified'   => 'gmt_modified',
        'reason'        => 'reason',
        'remarks'       => 'remarks',
        'roomInfoList'  => 'room_info_list',
        'saleOrderId'   => 'sale_order_id',
        'source'        => 'source',
        'status'        => 'status',
        'workOrderId'   => 'work_order_id',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['room_info_list'] = [];
            if (null !== $this->roomInfoList && \is_array($this->roomInfoList)) {
                $n = 0;
                foreach ($this->roomInfoList as $item) {
                    $res['room_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return module
     */
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
                $n                   = 0;
                foreach ($map['room_info_list'] as $item) {
                    $model->roomInfoList[$n++] = null !== $item ? roomInfoList::fromMap($item) : $item;
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
