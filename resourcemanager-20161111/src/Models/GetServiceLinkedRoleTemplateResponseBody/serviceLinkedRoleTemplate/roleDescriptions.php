<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetServiceLinkedRoleTemplateResponseBody\serviceLinkedRoleTemplate;

use AlibabaCloud\SDK\ResourceManager\V20161111\Models\GetServiceLinkedRoleTemplateResponseBody\serviceLinkedRoleTemplate\roleDescriptions\roleDescription;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleDescription) {
            $res['RoleDescription'] = [];
            if (null !== $this->roleDescription && \is_array($this->roleDescription)) {
                $n = 0;
                foreach ($this->roleDescription as $item) {
                    $res['RoleDescription'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roleDescriptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RoleDescription'])) {
            if (!empty($map['RoleDescription'])) {
                $model->roleDescription = [];
                $n                      = 0;
                foreach ($map['RoleDescription'] as $item) {
                    $model->roleDescription[$n++] = null !== $item ? roleDescription::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
