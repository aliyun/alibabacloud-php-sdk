<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateUserGroupRequest;

use AlibabaCloud\Tea\Model;

class createCommand extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $active;

    /**
     * @var string[]
     */
    public $adminUserIdList;

    /**
     * @example xx
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'active'          => 'Active',
        'adminUserIdList' => 'AdminUserIdList',
        'description'     => 'Description',
        'name'            => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->adminUserIdList) {
            $res['AdminUserIdList'] = $this->adminUserIdList;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['AdminUserIdList'])) {
            if (!empty($map['AdminUserIdList'])) {
                $model->adminUserIdList = $map['AdminUserIdList'];
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
