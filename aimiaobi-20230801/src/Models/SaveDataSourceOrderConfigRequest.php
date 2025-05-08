<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SaveDataSourceOrderConfigRequest\userConfigDataSourceList;

class SaveDataSourceOrderConfigRequest extends Model
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
     * @var userConfigDataSourceList[]
     */
    public $userConfigDataSourceList;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'generateTechnology' => 'GenerateTechnology',
        'productCode' => 'ProductCode',
        'userConfigDataSourceList' => 'UserConfigDataSourceList',
    ];

    public function validate()
    {
        if (\is_array($this->userConfigDataSourceList)) {
            Model::validateArray($this->userConfigDataSourceList);
        }
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

        if (null !== $this->userConfigDataSourceList) {
            if (\is_array($this->userConfigDataSourceList)) {
                $res['UserConfigDataSourceList'] = [];
                $n1 = 0;
                foreach ($this->userConfigDataSourceList as $item1) {
                    $res['UserConfigDataSourceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
            if (!empty($map['UserConfigDataSourceList'])) {
                $model->userConfigDataSourceList = [];
                $n1 = 0;
                foreach ($map['UserConfigDataSourceList'] as $item1) {
                    $model->userConfigDataSourceList[$n1++] = userConfigDataSourceList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
