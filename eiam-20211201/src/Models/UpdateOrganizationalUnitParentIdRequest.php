<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class UpdateOrganizationalUnitParentIdRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $organizationalUnitId;

    /**
     * @var string
     */
    public $parentId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'organizationalUnitId' => 'OrganizationalUnitId',
        'parentId' => 'ParentId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->organizationalUnitId) {
            $res['OrganizationalUnitId'] = $this->organizationalUnitId;
        }

        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
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

        if (isset($map['OrganizationalUnitId'])) {
            $model->organizationalUnitId = $map['OrganizationalUnitId'];
        }

        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        return $model;
    }
}
