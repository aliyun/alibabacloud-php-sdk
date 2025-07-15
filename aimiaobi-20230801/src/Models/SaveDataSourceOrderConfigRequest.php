<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SaveDataSourceOrderConfigRequest\userConfigDataSourceList;
use AlibabaCloud\Tea\Model;

class SaveDataSourceOrderConfigRequest extends Model
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
     * @var userConfigDataSourceList[]
     */
    public $userConfigDataSourceList;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'generateTechnology' => 'GenerateTechnology',
        'productCode' => 'ProductCode',
        'userConfigDataSourceList' => 'UserConfigDataSourceList',
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
        if (null !== $this->userConfigDataSourceList) {
            $res['UserConfigDataSourceList'] = [];
            if (null !== $this->userConfigDataSourceList && \is_array($this->userConfigDataSourceList)) {
                $n = 0;
                foreach ($this->userConfigDataSourceList as $item) {
                    $res['UserConfigDataSourceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveDataSourceOrderConfigRequest
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
            if (!empty($map['UserConfigDataSourceList'])) {
                $model->userConfigDataSourceList = [];
                $n = 0;
                foreach ($map['UserConfigDataSourceList'] as $item) {
                    $model->userConfigDataSourceList[$n++] = null !== $item ? userConfigDataSourceList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
