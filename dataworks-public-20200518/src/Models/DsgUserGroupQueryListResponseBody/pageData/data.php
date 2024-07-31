<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgUserGroupQueryListResponseBody\pageData;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The usernames in the user group.
     *
     * @var string[]
     */
    public $accounts;

    /**
     * @description The time when the user group was created.
     *
     * @example 2024-05-10 17:14:44
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the user group was modified.
     *
     * @example 2024-05-10 17:14:44
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The user group ID.
     *
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the user group.
     *
     * @example test_group
     *
     * @var string
     */
    public $name;

    /**
     * @description The owner of the user group.
     *
     * @example user1
     *
     * @var string
     */
    public $owner;
    protected $_name = [
        'accounts'    => 'Accounts',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id'          => 'Id',
        'name'        => 'Name',
        'owner'       => 'Owner',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accounts) {
            $res['Accounts'] = $this->accounts;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accounts'])) {
            if (!empty($map['Accounts'])) {
                $model->accounts = $map['Accounts'];
            }
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        return $model;
    }
}
