<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderQueryResponseBody\module;

use AlibabaCloud\Dara\Model;

class orderBaseInfo extends Model
{
    /**
     * @var string
     */
    public $applyId;

    /**
     * @var string
     */
    public $btripTitle;

    /**
     * @var int
     */
    public $category;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $corpName;

    /**
     * @var string
     */
    public $departId;

    /**
     * @var string
     */
    public $departName;

    /**
     * @var string[]
     */
    public $exceedApplyNos;

    /**
     * @var string
     */
    public $extendField;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $itineraryId;

    /**
     * @var int
     */
    public $orderStatus;

    /**
     * @var int
     */
    public $orderType;

    /**
     * @var string
     */
    public $supplier;

    /**
     * @var string
     */
    public $thirdpartApplyId;

    /**
     * @var string
     */
    public $thirdpartBusinessId;

    /**
     * @var string
     */
    public $thirdpartDepartId;

    /**
     * @var string
     */
    public $thirdpartItineraryId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'applyId' => 'apply_id',
        'btripTitle' => 'btrip_title',
        'category' => 'category',
        'corpId' => 'corp_id',
        'corpName' => 'corp_name',
        'departId' => 'depart_id',
        'departName' => 'depart_name',
        'exceedApplyNos' => 'exceed_apply_nos',
        'extendField' => 'extend_field',
        'gmtCreate' => 'gmt_create',
        'gmtModified' => 'gmt_modified',
        'id' => 'id',
        'itineraryId' => 'itinerary_id',
        'orderStatus' => 'order_status',
        'orderType' => 'order_type',
        'supplier' => 'supplier',
        'thirdpartApplyId' => 'thirdpart_apply_id',
        'thirdpartBusinessId' => 'thirdpart_business_id',
        'thirdpartDepartId' => 'thirdpart_depart_id',
        'thirdpartItineraryId' => 'thirdpart_itinerary_id',
        'userId' => 'user_id',
        'userName' => 'user_name',
    ];

    public function validate()
    {
        if (\is_array($this->exceedApplyNos)) {
            Model::validateArray($this->exceedApplyNos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyId) {
            $res['apply_id'] = $this->applyId;
        }

        if (null !== $this->btripTitle) {
            $res['btrip_title'] = $this->btripTitle;
        }

        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }

        if (null !== $this->corpName) {
            $res['corp_name'] = $this->corpName;
        }

        if (null !== $this->departId) {
            $res['depart_id'] = $this->departId;
        }

        if (null !== $this->departName) {
            $res['depart_name'] = $this->departName;
        }

        if (null !== $this->exceedApplyNos) {
            if (\is_array($this->exceedApplyNos)) {
                $res['exceed_apply_nos'] = [];
                $n1 = 0;
                foreach ($this->exceedApplyNos as $item1) {
                    $res['exceed_apply_nos'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->extendField) {
            $res['extend_field'] = $this->extendField;
        }

        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->itineraryId) {
            $res['itinerary_id'] = $this->itineraryId;
        }

        if (null !== $this->orderStatus) {
            $res['order_status'] = $this->orderStatus;
        }

        if (null !== $this->orderType) {
            $res['order_type'] = $this->orderType;
        }

        if (null !== $this->supplier) {
            $res['supplier'] = $this->supplier;
        }

        if (null !== $this->thirdpartApplyId) {
            $res['thirdpart_apply_id'] = $this->thirdpartApplyId;
        }

        if (null !== $this->thirdpartBusinessId) {
            $res['thirdpart_business_id'] = $this->thirdpartBusinessId;
        }

        if (null !== $this->thirdpartDepartId) {
            $res['thirdpart_depart_id'] = $this->thirdpartDepartId;
        }

        if (null !== $this->thirdpartItineraryId) {
            $res['thirdpart_itinerary_id'] = $this->thirdpartItineraryId;
        }

        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }

        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
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
        if (isset($map['apply_id'])) {
            $model->applyId = $map['apply_id'];
        }

        if (isset($map['btrip_title'])) {
            $model->btripTitle = $map['btrip_title'];
        }

        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['corp_id'])) {
            $model->corpId = $map['corp_id'];
        }

        if (isset($map['corp_name'])) {
            $model->corpName = $map['corp_name'];
        }

        if (isset($map['depart_id'])) {
            $model->departId = $map['depart_id'];
        }

        if (isset($map['depart_name'])) {
            $model->departName = $map['depart_name'];
        }

        if (isset($map['exceed_apply_nos'])) {
            if (!empty($map['exceed_apply_nos'])) {
                $model->exceedApplyNos = [];
                $n1 = 0;
                foreach ($map['exceed_apply_nos'] as $item1) {
                    $model->exceedApplyNos[$n1++] = $item1;
                }
            }
        }

        if (isset($map['extend_field'])) {
            $model->extendField = $map['extend_field'];
        }

        if (isset($map['gmt_create'])) {
            $model->gmtCreate = $map['gmt_create'];
        }

        if (isset($map['gmt_modified'])) {
            $model->gmtModified = $map['gmt_modified'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['itinerary_id'])) {
            $model->itineraryId = $map['itinerary_id'];
        }

        if (isset($map['order_status'])) {
            $model->orderStatus = $map['order_status'];
        }

        if (isset($map['order_type'])) {
            $model->orderType = $map['order_type'];
        }

        if (isset($map['supplier'])) {
            $model->supplier = $map['supplier'];
        }

        if (isset($map['thirdpart_apply_id'])) {
            $model->thirdpartApplyId = $map['thirdpart_apply_id'];
        }

        if (isset($map['thirdpart_business_id'])) {
            $model->thirdpartBusinessId = $map['thirdpart_business_id'];
        }

        if (isset($map['thirdpart_depart_id'])) {
            $model->thirdpartDepartId = $map['thirdpart_depart_id'];
        }

        if (isset($map['thirdpart_itinerary_id'])) {
            $model->thirdpartItineraryId = $map['thirdpart_itinerary_id'];
        }

        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }

        if (isset($map['user_name'])) {
            $model->userName = $map['user_name'];
        }

        return $model;
    }
}
