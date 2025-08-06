<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAutoRenewAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceAutoRenewAttributeResponseBody\instanceRenewAttributes\instanceRenewAttribute;

class instanceRenewAttributes extends Model
{
    /**
     * @var instanceRenewAttribute[]
     */
    public $instanceRenewAttribute;
    protected $_name = [
        'instanceRenewAttribute' => 'InstanceRenewAttribute',
    ];

    public function validate()
    {
        if (\is_array($this->instanceRenewAttribute)) {
            Model::validateArray($this->instanceRenewAttribute);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceRenewAttribute) {
            if (\is_array($this->instanceRenewAttribute)) {
                $res['InstanceRenewAttribute'] = [];
                $n1 = 0;
                foreach ($this->instanceRenewAttribute as $item1) {
                    $res['InstanceRenewAttribute'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceRenewAttribute'])) {
            if (!empty($map['InstanceRenewAttribute'])) {
                $model->instanceRenewAttribute = [];
                $n1 = 0;
                foreach ($map['InstanceRenewAttribute'] as $item1) {
                    $model->instanceRenewAttribute[$n1] = instanceRenewAttribute::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
