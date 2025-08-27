<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateNodeGroupRequest\nodeGroup;

class CreateNodeGroupRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var nodeGroup
     */
    public $nodeGroup;

    /**
     * @var mixed[]
     */
    public $nodeUnit;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'nodeGroup' => 'NodeGroup',
        'nodeUnit' => 'NodeUnit',
    ];

    public function validate()
    {
        if (null !== $this->nodeGroup) {
            $this->nodeGroup->validate();
        }
        if (\is_array($this->nodeUnit)) {
            Model::validateArray($this->nodeUnit);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->nodeGroup) {
            $res['NodeGroup'] = null !== $this->nodeGroup ? $this->nodeGroup->toArray($noStream) : $this->nodeGroup;
        }

        if (null !== $this->nodeUnit) {
            if (\is_array($this->nodeUnit)) {
                $res['NodeUnit'] = [];
                foreach ($this->nodeUnit as $key1 => $value1) {
                    $res['NodeUnit'][$key1] = $value1;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['NodeGroup'])) {
            $model->nodeGroup = nodeGroup::fromMap($map['NodeGroup']);
        }

        if (isset($map['NodeUnit'])) {
            if (!empty($map['NodeUnit'])) {
                $model->nodeUnit = [];
                foreach ($map['NodeUnit'] as $key1 => $value1) {
                    $model->nodeUnit[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
