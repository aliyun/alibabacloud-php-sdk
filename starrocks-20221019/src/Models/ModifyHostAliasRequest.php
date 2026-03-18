<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Starrocks\V20221019\Models\ModifyHostAliasRequest\hostAliases;

class ModifyHostAliasRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var hostAliases[]
     */
    public $hostAliases;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'hostAliases' => 'hostAliases',
    ];

    public function validate()
    {
        if (\is_array($this->hostAliases)) {
            Model::validateArray($this->hostAliases);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->hostAliases) {
            if (\is_array($this->hostAliases)) {
                $res['hostAliases'] = [];
                $n1 = 0;
                foreach ($this->hostAliases as $item1) {
                    $res['hostAliases'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['hostAliases'])) {
            if (!empty($map['hostAliases'])) {
                $model->hostAliases = [];
                $n1 = 0;
                foreach ($map['hostAliases'] as $item1) {
                    $model->hostAliases[$n1] = hostAliases::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
