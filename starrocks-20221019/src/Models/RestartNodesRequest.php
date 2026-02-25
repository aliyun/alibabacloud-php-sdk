<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\RestartNodesRequest\restartNodeGroups;

class RestartNodesRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var restartNodeGroups[]
     */
    public $restartNodeGroups;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'restartNodeGroups' => 'RestartNodeGroups',
    ];

    public function validate()
    {
        if (\is_array($this->restartNodeGroups)) {
            Model::validateArray($this->restartNodeGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->restartNodeGroups) {
            if (\is_array($this->restartNodeGroups)) {
                $res['RestartNodeGroups'] = [];
                $n1 = 0;
                foreach ($this->restartNodeGroups as $item1) {
                    $res['RestartNodeGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (isset($map['RestartNodeGroups'])) {
            if (!empty($map['RestartNodeGroups'])) {
                $model->restartNodeGroups = [];
                $n1 = 0;
                foreach ($map['RestartNodeGroups'] as $item1) {
                    $model->restartNodeGroups[$n1] = restartNodeGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
