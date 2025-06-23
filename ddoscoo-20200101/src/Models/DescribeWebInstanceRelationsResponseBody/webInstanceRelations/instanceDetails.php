<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebInstanceRelationsResponseBody\webInstanceRelations;

use AlibabaCloud\Dara\Model;

class instanceDetails extends Model
{
    /**
     * @var string[]
     */
    public $eipList;

    /**
     * @var string
     */
    public $functionVersion;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'eipList' => 'EipList',
        'functionVersion' => 'FunctionVersion',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->eipList)) {
            Model::validateArray($this->eipList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eipList) {
            if (\is_array($this->eipList)) {
                $res['EipList'] = [];
                $n1 = 0;
                foreach ($this->eipList as $item1) {
                    $res['EipList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->functionVersion) {
            $res['FunctionVersion'] = $this->functionVersion;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['EipList'])) {
            if (!empty($map['EipList'])) {
                $model->eipList = [];
                $n1 = 0;
                foreach ($map['EipList'] as $item1) {
                    $model->eipList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['FunctionVersion'])) {
            $model->functionVersion = $map['FunctionVersion'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
