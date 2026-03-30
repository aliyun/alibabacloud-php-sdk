<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianControl\V20240816\Models\ListApiKeysResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BailianControl\V20240816\Models\ListApiKeysResponseBody\apiKeys\authSetModel;

class apiKeys extends Model
{
    /**
     * @var string
     */
    public $apiKeyValue;

    /**
     * @var string
     */
    public $apikeyId;

    /**
     * @var authSetModel
     */
    public $authSetModel;

    /**
     * @var int
     */
    public $blocked;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $expireTime;

    /**
     * @var string
     */
    public $extData;

    /**
     * @var string
     */
    public $parentUid;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'apiKeyValue' => 'apiKeyValue',
        'apikeyId' => 'apikeyId',
        'authSetModel' => 'authSetModel',
        'blocked' => 'blocked',
        'createTime' => 'createTime',
        'creator' => 'creator',
        'description' => 'description',
        'expireTime' => 'expireTime',
        'extData' => 'extData',
        'parentUid' => 'parentUid',
        'type' => 'type',
        'uid' => 'uid',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (null !== $this->authSetModel) {
            $this->authSetModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKeyValue) {
            $res['apiKeyValue'] = $this->apiKeyValue;
        }

        if (null !== $this->apikeyId) {
            $res['apikeyId'] = $this->apikeyId;
        }

        if (null !== $this->authSetModel) {
            $res['authSetModel'] = null !== $this->authSetModel ? $this->authSetModel->toArray($noStream) : $this->authSetModel;
        }

        if (null !== $this->blocked) {
            $res['blocked'] = $this->blocked;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
        }

        if (null !== $this->extData) {
            $res['extData'] = $this->extData;
        }

        if (null !== $this->parentUid) {
            $res['parentUid'] = $this->parentUid;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['apiKeyValue'])) {
            $model->apiKeyValue = $map['apiKeyValue'];
        }

        if (isset($map['apikeyId'])) {
            $model->apikeyId = $map['apikeyId'];
        }

        if (isset($map['authSetModel'])) {
            $model->authSetModel = authSetModel::fromMap($map['authSetModel']);
        }

        if (isset($map['blocked'])) {
            $model->blocked = $map['blocked'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
        }

        if (isset($map['extData'])) {
            $model->extData = $map['extData'];
        }

        if (isset($map['parentUid'])) {
            $model->parentUid = $map['parentUid'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
