<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationVariablesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BPStudio\V20210931\Models\GetApplicationVariablesResponseBody\data\variableList;

class data extends Model
{
    /**
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

    public function validate()
    {
        if (\is_array($this->variableList)) {
            Model::validateArray($this->variableList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->variableList) {
            if (\is_array($this->variableList)) {
                $res['VariableList'] = [];
                $n1 = 0;
                foreach ($this->variableList as $item1) {
                    $res['VariableList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['VariableList'])) {
            if (!empty($map['VariableList'])) {
                $model->variableList = [];
                $n1 = 0;
                foreach ($map['VariableList'] as $item1) {
                    $model->variableList[$n1++] = variableList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
