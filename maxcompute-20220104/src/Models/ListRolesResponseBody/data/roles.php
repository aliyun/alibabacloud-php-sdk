<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListRolesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListRolesResponseBody\data\roles\acl;

class roles extends Model
{
    /**
     * @var acl
     */
    public $acl;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $policy;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'acl'    => 'acl',
        'name'   => 'name',
        'policy' => 'policy',
        'type'   => 'type',
    ];

    public function validate()
    {
        if (null !== $this->acl) {
            $this->acl->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acl) {
            $res['acl'] = null !== $this->acl ? $this->acl->toArray($noStream) : $this->acl;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->policy) {
            $res['policy'] = $this->policy;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['acl'])) {
            $model->acl = acl::fromMap($map['acl']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['policy'])) {
            $model->policy = $map['policy'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
