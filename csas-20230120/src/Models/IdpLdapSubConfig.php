<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class IdpLdapSubConfig extends Model
{
    /**
     * @var string
     */
    public $baseDn;

    /**
     * @var string
     */
    public $groupBaseDn;

    /**
     * @var string
     */
    public $groupFilter;

    /**
     * @var string
     */
    public $groupMembershipAttr;

    /**
     * @var string
     */
    public $groupNameAttr;

    /**
     * @var string
     */
    public $loginNameAttr;

    /**
     * @var string
     */
    public $serverAddr;

    /**
     * @var string
     */
    public $serverPort;

    /**
     * @var string
     */
    public $serverType;

    /**
     * @var bool
     */
    public $useSsl;

    /**
     * @var string
     */
    public $userDn;

    /**
     * @var string
     */
    public $userFilter;

    /**
     * @var string
     */
    public $userPassword;
    protected $_name = [
        'baseDn' => 'BaseDn',
        'groupBaseDn' => 'GroupBaseDn',
        'groupFilter' => 'GroupFilter',
        'groupMembershipAttr' => 'GroupMembershipAttr',
        'groupNameAttr' => 'GroupNameAttr',
        'loginNameAttr' => 'LoginNameAttr',
        'serverAddr' => 'ServerAddr',
        'serverPort' => 'ServerPort',
        'serverType' => 'ServerType',
        'useSsl' => 'UseSsl',
        'userDn' => 'UserDn',
        'userFilter' => 'UserFilter',
        'userPassword' => 'UserPassword',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseDn) {
            $res['BaseDn'] = $this->baseDn;
        }

        if (null !== $this->groupBaseDn) {
            $res['GroupBaseDn'] = $this->groupBaseDn;
        }

        if (null !== $this->groupFilter) {
            $res['GroupFilter'] = $this->groupFilter;
        }

        if (null !== $this->groupMembershipAttr) {
            $res['GroupMembershipAttr'] = $this->groupMembershipAttr;
        }

        if (null !== $this->groupNameAttr) {
            $res['GroupNameAttr'] = $this->groupNameAttr;
        }

        if (null !== $this->loginNameAttr) {
            $res['LoginNameAttr'] = $this->loginNameAttr;
        }

        if (null !== $this->serverAddr) {
            $res['ServerAddr'] = $this->serverAddr;
        }

        if (null !== $this->serverPort) {
            $res['ServerPort'] = $this->serverPort;
        }

        if (null !== $this->serverType) {
            $res['ServerType'] = $this->serverType;
        }

        if (null !== $this->useSsl) {
            $res['UseSsl'] = $this->useSsl;
        }

        if (null !== $this->userDn) {
            $res['UserDn'] = $this->userDn;
        }

        if (null !== $this->userFilter) {
            $res['UserFilter'] = $this->userFilter;
        }

        if (null !== $this->userPassword) {
            $res['UserPassword'] = $this->userPassword;
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
        if (isset($map['BaseDn'])) {
            $model->baseDn = $map['BaseDn'];
        }

        if (isset($map['GroupBaseDn'])) {
            $model->groupBaseDn = $map['GroupBaseDn'];
        }

        if (isset($map['GroupFilter'])) {
            $model->groupFilter = $map['GroupFilter'];
        }

        if (isset($map['GroupMembershipAttr'])) {
            $model->groupMembershipAttr = $map['GroupMembershipAttr'];
        }

        if (isset($map['GroupNameAttr'])) {
            $model->groupNameAttr = $map['GroupNameAttr'];
        }

        if (isset($map['LoginNameAttr'])) {
            $model->loginNameAttr = $map['LoginNameAttr'];
        }

        if (isset($map['ServerAddr'])) {
            $model->serverAddr = $map['ServerAddr'];
        }

        if (isset($map['ServerPort'])) {
            $model->serverPort = $map['ServerPort'];
        }

        if (isset($map['ServerType'])) {
            $model->serverType = $map['ServerType'];
        }

        if (isset($map['UseSsl'])) {
            $model->useSsl = $map['UseSsl'];
        }

        if (isset($map['UserDn'])) {
            $model->userDn = $map['UserDn'];
        }

        if (isset($map['UserFilter'])) {
            $model->userFilter = $map['UserFilter'];
        }

        if (isset($map['UserPassword'])) {
            $model->userPassword = $map['UserPassword'];
        }

        return $model;
    }
}
