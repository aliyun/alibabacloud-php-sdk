<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class DeleteCustomTextRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example xxxxx_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example 商品code
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description This parameter is required.
     *
     * @example 85
     *
     * @var int
     */
    public $id;
    protected $_name = [
        'agentKey'      => 'AgentKey',
        'commodityCode' => 'CommodityCode',
        'id'            => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCustomTextRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
