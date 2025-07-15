<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class SaveDataSourceOrderConfigShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example c160c841c8e54295bf2f441432785944_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example copilotReference
     *
     * @var string
     */
    public $generateTechnology;

    /**
     * @description This parameter is required.
     *
     * @example miaobi
     *
     * @var string
     */
    public $productCode;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $userConfigDataSourceListShrink;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'generateTechnology' => 'GenerateTechnology',
        'productCode' => 'ProductCode',
        'userConfigDataSourceListShrink' => 'UserConfigDataSourceList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->generateTechnology) {
            $res['GenerateTechnology'] = $this->generateTechnology;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->userConfigDataSourceListShrink) {
            $res['UserConfigDataSourceList'] = $this->userConfigDataSourceListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveDataSourceOrderConfigShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['GenerateTechnology'])) {
            $model->generateTechnology = $map['GenerateTechnology'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['UserConfigDataSourceList'])) {
            $model->userConfigDataSourceListShrink = $map['UserConfigDataSourceList'];
        }

        return $model;
    }
}
