<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateCloudPhoneNodeResponseBody;

use AlibabaCloud\Dara\Model;

class nodeInfos extends Model
{
    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'instanceIds' => 'InstanceIds',
        'nodeId' => 'NodeId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
