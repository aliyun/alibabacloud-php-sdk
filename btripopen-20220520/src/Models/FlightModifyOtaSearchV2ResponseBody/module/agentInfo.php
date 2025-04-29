<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ResponseBody\module\agentInfo\cabinClassInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightModifyOtaSearchV2ResponseBody\module\agentInfo\priceInfoDTO;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModuleAgentInfoAttributeShowInfoMapValue;

class agentInfo extends Model
{
    /**
     * @var ModuleAgentInfoAttributeShowInfoMapValue[][]
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
        'bestDiscount' => 'best_discount',
        'cabinClassInfo' => 'cabin_class_info',
        'cabinCode' => 'cabin_code',
        'cabinName' => 'cabin_name',
        'itemId' => 'item_id',
        'modifyTypeDesc' => 'modify_type_desc',
        'modifyTypeName' => 'modify_type_name',
        'priceInfoDTO' => 'price_info_d_t_o',
        'quantity' => 'quantity',
        'supportChildTicket' => 'support_child_ticket',
    ];

    public function validate()
    {
        if (\is_array($this->attributeShowInfoMap)) {
            Model::validateArray($this->attributeShowInfoMap);
        }
        if (null !== $this->cabinClassInfo) {
            $this->cabinClassInfo->validate();
        }
        if (null !== $this->priceInfoDTO) {
            $this->priceInfoDTO->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeShowInfoMap) {
            if (\is_array($this->attributeShowInfoMap)) {
                $res['attribute_show_info_map'] = [];
                foreach ($this->attributeShowInfoMap as $key1 => $value1) {
                    if (\is_array($value1)) {
                        $res['attribute_show_info_map'][$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $res['attribute_show_info_map'][$key1][$n2++] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                        }
                    }
                }
            }
        }

        if (null !== $this->bestDiscount) {
            $res['best_discount'] = $this->bestDiscount;
        }

        if (null !== $this->cabinClassInfo) {
            $res['cabin_class_info'] = null !== $this->cabinClassInfo ? $this->cabinClassInfo->toArray($noStream) : $this->cabinClassInfo;
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
            $res['price_info_d_t_o'] = null !== $this->priceInfoDTO ? $this->priceInfoDTO->toArray($noStream) : $this->priceInfoDTO;
        }

        if (null !== $this->quantity) {
            $res['quantity'] = $this->quantity;
        }

        if (null !== $this->supportChildTicket) {
            $res['support_child_ticket'] = $this->supportChildTicket;
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
        if (isset($map['attribute_show_info_map'])) {
            if (!empty($map['attribute_show_info_map'])) {
                $model->attributeShowInfoMap = [];
                foreach ($map['attribute_show_info_map'] as $key1 => $value1) {
                    if (!empty($value1)) {
                        $model->attributeShowInfoMap[$key1] = [];
                        $n2 = 0;
                        foreach ($value1 as $item2) {
                            $model->attributeShowInfoMap[$key1][$n2++] = ModuleAgentInfoAttributeShowInfoMapValue::fromMap($item2);
                        }
                    }
                }
            }
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
