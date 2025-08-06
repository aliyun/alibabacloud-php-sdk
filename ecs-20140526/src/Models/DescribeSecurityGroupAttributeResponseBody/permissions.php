<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupAttributeResponseBody\permissions\permission;

class permissions extends Model
{
    /**
     * @var permission[]
     */
    public $permission;
    protected $_name = [
        'permission' => 'Permission',
    ];

    public function validate()
    {
        if (\is_array($this->permission)) {
            Model::validateArray($this->permission);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->permission) {
            if (\is_array($this->permission)) {
                $res['Permission'] = [];
                $n1 = 0;
                foreach ($this->permission as $item1) {
                    $res['Permission'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Permission'])) {
            if (!empty($map['Permission'])) {
                $model->permission = [];
                $n1 = 0;
                foreach ($map['Permission'] as $item1) {
                    $model->permission[$n1] = permission::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
