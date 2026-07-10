<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateLangfuseUserResponseBody\data;

use AlibabaCloud\Dara\Model;

class membership extends Model
{
    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $role;
    protected $_name = [
        'organizationId' => 'OrganizationId',
        'role' => 'Role',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
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
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        return $model;
    }
}
