<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class GetDataSourceOrderConfigRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example d9a1f6146a37446495d9985c2e7b267e_p_outbound_public
     *
     * @var string
     */
    public $agentKey;

    /**
     * @description This parameter is required.
     *
     * @example miaobi
     *
     * @var string
     */
    public $productCode;
    protected $_name = [
        'agentKey'    => 'AgentKey',
        'productCode' => 'ProductCode',
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
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataSourceOrderConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
