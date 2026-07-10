<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\DescribeLangfuseProjectMembershipsResponseBody\data;

use AlibabaCloud\Dara\Model;

class memberships extends Model
{
    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $orgRole;

    /**
     * @var string
     */
    public $projectRole;
    protected $_name = [
        'email' => 'Email',
        'name' => 'Name',
        'orgRole' => 'OrgRole',
        'projectRole' => 'ProjectRole',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->orgRole) {
            $res['OrgRole'] = $this->orgRole;
        }

        if (null !== $this->projectRole) {
            $res['ProjectRole'] = $this->projectRole;
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
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OrgRole'])) {
            $model->orgRole = $map['OrgRole'];
        }

        if (isset($map['ProjectRole'])) {
            $model->projectRole = $map['ProjectRole'];
        }

        return $model;
    }
}
