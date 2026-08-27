<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models\GetServiceLinkedRoleTemplateResponseBody\serviceLinkedRoleTemplate;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ram\V20150501\Models\GetServiceLinkedRoleTemplateResponseBody\serviceLinkedRoleTemplate\roleDescriptions\roleDescription;

class roleDescriptions extends Model
{
    /**
     * @var roleDescription[]
     */
    public $roleDescription;
    protected $_name = [
        'roleDescription' => 'RoleDescription',
    ];

    public function validate()
    {
        if (\is_array($this->roleDescription)) {
            Model::validateArray($this->roleDescription);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->roleDescription) {
            if (\is_array($this->roleDescription)) {
                $res['RoleDescription'] = [];
                $n1 = 0;
                foreach ($this->roleDescription as $item1) {
                    $res['RoleDescription'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RoleDescription'])) {
            if (!empty($map['RoleDescription'])) {
                $model->roleDescription = [];
                $n1 = 0;
                foreach ($map['RoleDescription'] as $item1) {
                    $model->roleDescription[$n1] = roleDescription::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
