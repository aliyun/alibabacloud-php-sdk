<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListJoinedOrganizationsResponseBody;

use AlibabaCloud\Tea\Model;

class organizations extends Model
{
    /**
     * @example 65f25d0fa54c216dcf6b1dbd
     *
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $isOrgAdmin;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'id'         => 'id',
        'isOrgAdmin' => 'isOrgAdmin',
        'name'       => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->isOrgAdmin) {
            $res['isOrgAdmin'] = $this->isOrgAdmin;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return organizations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['isOrgAdmin'])) {
            $model->isOrgAdmin = $map['isOrgAdmin'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
