<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListJoinedOrganizationsResponseBody;

use AlibabaCloud\Dara\Model;

class organizations extends Model
{
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
