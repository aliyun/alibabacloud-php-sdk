<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class SaveDataSourceOrderConfigShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;

    /**
     * @var string
     */
    public $generateTechnology;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $userConfigDataSourceListShrink;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'generateTechnology' => 'GenerateTechnology',
        'productCode' => 'ProductCode',
        'userConfigDataSourceListShrink' => 'UserConfigDataSourceList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
