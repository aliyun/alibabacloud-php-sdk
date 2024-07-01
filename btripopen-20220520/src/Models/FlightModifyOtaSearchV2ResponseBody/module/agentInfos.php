<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ResponseBody\module\agentInfos\cabinClassInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ResponseBody\module\agentInfos\priceInfoDTO;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleAgentInfosAttributeShowInfoMapValue;
use AlibabaCloud\Tea\Model;

class agentInfos extends Model
{
    /**
     * @var ModuleAgentInfosAttributeShowInfoMapValue[][]
     */
    public $attributeShowInfoMap;

    /**
     * @var float
     */
    public $bestDiscount;

    /**
     * @var cabinClassInfo
     */
    public $cabinClassInfo;

    /**
     * @var int
     */
    public $cabinCode;

    /**
     * @var string
     */
    public $cabinName;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $modifyTypeDesc;

    /**
     * @var string
     */
    public $modifyTypeName;

    /**
     * @var priceInfoDTO
     */
    public $priceInfoDTO;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var bool
     */
    public $supportChildTicket;
    protected $_name = [
        'attributeShowInfoMap' => 'attribute_show_info_map',
        'bestDiscount'         => 'best_discount',
        'cabinClassInfo'       => 'cabin_class_info',
        'cabinCode'            => 'cabin_code',
        'cabinName'            => 'cabin_name',
        'itemId'               => 'item_id',
        'modifyTypeDesc'       => 'modify_type_desc',
        'modifyTypeName'       => 'modify_type_name',
        'priceInfoDTO'         => 'price_info_d_t_o',
        'quantity'             => 'quantity',
        'supportChildTicket'   => 'support_child_ticket',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributeShowInfoMap) {
            $res['attribute_show_info_map'] = $this->attributeShowInfoMap;
        }
        if (null !== $this->bestDiscount) {
            $res['best_discount'] = $this->bestDiscount;
        }
        if (null !== $this->cabinClassInfo) {
            $res['cabin_class_info'] = null !== $this->cabinClassInfo ? $this->cabinClassInfo->toMap() : null;
        }
        if (null !== $this->cabinCode) {
            $res['cabin_code'] = $this->cabinCode;
        }
        if (null !== $this->cabinName) {
            $res['cabin_name'] = $this->cabinName;
        }
        if (null !== $this->itemId) {
            $res['item_id'] = $this->itemId;
        }
        if (null !== $this->modifyTypeDesc) {
            $res['modify_type_desc'] = $this->modifyTypeDesc;
        }
        if (null !== $this->modifyTypeName) {
            $res['modify_type_name'] = $this->modifyTypeName;
        }
        if (null !== $this->priceInfoDTO) {
            $res['price_info_d_t_o'] = null !== $this->priceInfoDTO ? $this->priceInfoDTO->toMap() : null;
        }
        if (null !== $this->quantity) {
            $res['quantity'] = $this->quantity;
        }
        if (null !== $this->supportChildTicket) {
            $res['support_child_ticket'] = $this->supportChildTicket;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return agentInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['attribute_show_info_map'])) {
            $model->attributeShowInfoMap = $map['attribute_show_info_map'];
        }
        if (isset($map['best_discount'])) {
            $model->bestDiscount = $map['best_discount'];
        }
        if (isset($map['cabin_class_info'])) {
            $model->cabinClassInfo = cabinClassInfo::fromMap($map['cabin_class_info']);
        }
        if (isset($map['cabin_code'])) {
            $model->cabinCode = $map['cabin_code'];
        }
        if (isset($map['cabin_name'])) {
            $model->cabinName = $map['cabin_name'];
        }
        if (isset($map['item_id'])) {
            $model->itemId = $map['item_id'];
        }
        if (isset($map['modify_type_desc'])) {
            $model->modifyTypeDesc = $map['modify_type_desc'];
        }
        if (isset($map['modify_type_name'])) {
            $model->modifyTypeName = $map['modify_type_name'];
        }
        if (isset($map['price_info_d_t_o'])) {
            $model->priceInfoDTO = priceInfoDTO::fromMap($map['price_info_d_t_o']);
        }
        if (isset($map['quantity'])) {
            $model->quantity = $map['quantity'];
        }
        if (isset($map['support_child_ticket'])) {
            $model->supportChildTicket = $map['support_child_ticket'];
        }

        return $model;
    }
}
