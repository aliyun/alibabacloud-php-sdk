<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListAuthorizationsResponseBody;

use AlibabaCloud\Tea\Model;

class authorizations extends Model
{
    /**
     * @var string
     */
    public $authorizationId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $dueTime;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ownerUid;

    /**
     * @var int
     */
    public $uid;
    protected $_name = [
        'authorizationId' => 'authorizationId',
        'createTime'      => 'createTime',
        'dueTime'         => 'dueTime',
        'moduleId'        => 'moduleId',
        'moduleVersion'   => 'moduleVersion',
        'name'            => 'name',
        'ownerUid'        => 'ownerUid',
        'uid'             => 'uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorizationId) {
            $res['authorizationId'] = $this->authorizationId;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->dueTime) {
            $res['dueTime'] = $this->dueTime;
        }
        if (null !== $this->moduleId) {
            $res['moduleId'] = $this->moduleId;
        }
        if (null !== $this->moduleVersion) {
            $res['moduleVersion'] = $this->moduleVersion;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->ownerUid) {
            $res['ownerUid'] = $this->ownerUid;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authorizations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['authorizationId'])) {
            $model->authorizationId = $map['authorizationId'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['dueTime'])) {
            $model->dueTime = $map['dueTime'];
        }
        if (isset($map['moduleId'])) {
            $model->moduleId = $map['moduleId'];
        }
        if (isset($map['moduleVersion'])) {
            $model->moduleVersion = $map['moduleVersion'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['ownerUid'])) {
            $model->ownerUid = $map['ownerUid'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
