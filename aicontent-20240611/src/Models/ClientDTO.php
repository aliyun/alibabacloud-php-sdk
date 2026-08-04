<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ClientDTO extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $allowedModelGroupConfig;

    /**
     * @var string
     */
    public $allowedModels;

    /**
     * @var string
     */
    public $clientUuid;

    /**
     * @var string
     */
    public $contact;

    /**
     * @var int
     */
    public $deleteTag;

    /**
     * @var float
     */
    public $discount;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $level;

    /**
     * @var int
     */
    public $main;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var int
     */
    public $parentId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'address' => 'address',
        'allowedModelGroupConfig' => 'allowedModelGroupConfig',
        'allowedModels' => 'allowedModels',
        'clientUuid' => 'clientUuid',
        'contact' => 'contact',
        'deleteTag' => 'deleteTag',
        'discount' => 'discount',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'level' => 'level',
        'main' => 'main',
        'name' => 'name',
        'nodeType' => 'nodeType',
        'parentId' => 'parentId',
        'remark' => 'remark',
        'userId' => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }

        if (null !== $this->allowedModelGroupConfig) {
            $res['allowedModelGroupConfig'] = $this->allowedModelGroupConfig;
        }

        if (null !== $this->allowedModels) {
            $res['allowedModels'] = $this->allowedModels;
        }

        if (null !== $this->clientUuid) {
            $res['clientUuid'] = $this->clientUuid;
        }

        if (null !== $this->contact) {
            $res['contact'] = $this->contact;
        }

        if (null !== $this->deleteTag) {
            $res['deleteTag'] = $this->deleteTag;
        }

        if (null !== $this->discount) {
            $res['discount'] = $this->discount;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->level) {
            $res['level'] = $this->level;
        }

        if (null !== $this->main) {
            $res['main'] = $this->main;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->nodeType) {
            $res['nodeType'] = $this->nodeType;
        }

        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
        }

        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['address'])) {
            $model->address = $map['address'];
        }

        if (isset($map['allowedModelGroupConfig'])) {
            $model->allowedModelGroupConfig = $map['allowedModelGroupConfig'];
        }

        if (isset($map['allowedModels'])) {
            $model->allowedModels = $map['allowedModels'];
        }

        if (isset($map['clientUuid'])) {
            $model->clientUuid = $map['clientUuid'];
        }

        if (isset($map['contact'])) {
            $model->contact = $map['contact'];
        }

        if (isset($map['deleteTag'])) {
            $model->deleteTag = $map['deleteTag'];
        }

        if (isset($map['discount'])) {
            $model->discount = $map['discount'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        if (isset($map['main'])) {
            $model->main = $map['main'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['nodeType'])) {
            $model->nodeType = $map['nodeType'];
        }

        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }

        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
