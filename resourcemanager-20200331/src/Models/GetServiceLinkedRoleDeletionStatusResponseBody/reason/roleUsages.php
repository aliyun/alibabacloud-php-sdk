<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetServiceLinkedRoleDeletionStatusResponseBody\reason;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetServiceLinkedRoleDeletionStatusResponseBody\reason\roleUsages\roleUsage;

class roleUsages extends Model
{
    /**
     * @var roleUsage[]
     */
    public $roleUsage;
    protected $_name = [
        'roleUsage' => 'RoleUsage',
    ];

    public function validate()
    {
        if (\is_array($this->roleUsage)) {
            Model::validateArray($this->roleUsage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->roleUsage) {
            if (\is_array($this->roleUsage)) {
                $res['RoleUsage'] = [];
                $n1 = 0;
                foreach ($this->roleUsage as $item1) {
                    $res['RoleUsage'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RoleUsage'])) {
            if (!empty($map['RoleUsage'])) {
                $model->roleUsage = [];
                $n1 = 0;
                foreach ($map['RoleUsage'] as $item1) {
                    $model->roleUsage[$n1] = roleUsage::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
