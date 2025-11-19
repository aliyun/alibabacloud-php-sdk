<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSecurityIPGroupRelationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\DescribeSecurityIPGroupRelationResponseBody\data\globalSecurityIPGroupRel;

class data extends Model
{
    /**
     * @var globalSecurityIPGroupRel[]
     */
    public $globalSecurityIPGroupRel;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'globalSecurityIPGroupRel' => 'GlobalSecurityIPGroupRel',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->globalSecurityIPGroupRel)) {
            Model::validateArray($this->globalSecurityIPGroupRel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->globalSecurityIPGroupRel) {
            if (\is_array($this->globalSecurityIPGroupRel)) {
                $res['GlobalSecurityIPGroupRel'] = [];
                $n1 = 0;
                foreach ($this->globalSecurityIPGroupRel as $item1) {
                    $res['GlobalSecurityIPGroupRel'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['GlobalSecurityIPGroupRel'])) {
            if (!empty($map['GlobalSecurityIPGroupRel'])) {
                $model->globalSecurityIPGroupRel = [];
                $n1 = 0;
                foreach ($map['GlobalSecurityIPGroupRel'] as $item1) {
                    $model->globalSecurityIPGroupRel[$n1] = globalSecurityIPGroupRel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
