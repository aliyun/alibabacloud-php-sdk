<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody;

use AlibabaCloud\SDK\Alb\V20200616\Models\GetListenerAttributeResponseBody\aclConfig\aclRelations;
use AlibabaCloud\Tea\Model;

class aclConfig extends Model
{
    /**
     * @description 监听绑定的访问策略组
     *
     * @var aclRelations[]
     */
    public $aclRelations;

    /**
     * @description 访问控制类型
     *
     * @var string
     */
    public $aclType;
    protected $_name = [
        'aclRelations' => 'AclRelations',
        'aclType'      => 'AclType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclRelations) {
            $res['AclRelations'] = [];
            if (null !== $this->aclRelations && \is_array($this->aclRelations)) {
                $n = 0;
                foreach ($this->aclRelations as $item) {
                    $res['AclRelations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aclConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclRelations'])) {
            if (!empty($map['AclRelations'])) {
                $model->aclRelations = [];
                $n                   = 0;
                foreach ($map['AclRelations'] as $item) {
                    $model->aclRelations[$n++] = null !== $item ? aclRelations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }

        return $model;
    }
}
