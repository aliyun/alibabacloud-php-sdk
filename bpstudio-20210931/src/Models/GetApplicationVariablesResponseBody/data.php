<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationVariablesResponseBody;

use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationVariablesResponseBody\data\variableList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example ob5epf79uv****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var variableList[]
     */
    public $variableList;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'variableList' => 'VariableList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->variableList) {
            $res['VariableList'] = [];
            if (null !== $this->variableList && \is_array($this->variableList)) {
                $n = 0;
                foreach ($this->variableList as $item) {
                    $res['VariableList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['VariableList'])) {
            if (!empty($map['VariableList'])) {
                $model->variableList = [];
                $n = 0;
                foreach ($map['VariableList'] as $item) {
                    $model->variableList[$n++] = null !== $item ? variableList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
