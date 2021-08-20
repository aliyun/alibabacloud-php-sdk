<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryMemberWithInheritedResponseBody;

use AlibabaCloud\SDK\Codeup\V20200414\Models\ListRepositoryMemberWithInheritedResponseBody\result\inherited;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $externUserId;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $avatarUrl;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $accessLevel;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $username;

    /**
     * @var inherited
     */
    public $inherited;
    protected $_name = [
        'externUserId' => 'ExternUserId',
        'email'        => 'Email',
        'avatarUrl'    => 'AvatarUrl',
        'state'        => 'State',
        'accessLevel'  => 'AccessLevel',
        'name'         => 'Name',
        'id'           => 'Id',
        'username'     => 'Username',
        'inherited'    => 'Inherited',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externUserId) {
            $res['ExternUserId'] = $this->externUserId;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->avatarUrl) {
            $res['AvatarUrl'] = $this->avatarUrl;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->accessLevel) {
            $res['AccessLevel'] = $this->accessLevel;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->inherited) {
            $res['Inherited'] = null !== $this->inherited ? $this->inherited->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExternUserId'])) {
            $model->externUserId = $map['ExternUserId'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['AvatarUrl'])) {
            $model->avatarUrl = $map['AvatarUrl'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['AccessLevel'])) {
            $model->accessLevel = $map['AccessLevel'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['Inherited'])) {
            $model->inherited = inherited::fromMap($map['Inherited']);
        }

        return $model;
    }
}
