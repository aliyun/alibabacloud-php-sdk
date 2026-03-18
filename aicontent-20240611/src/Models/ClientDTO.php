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
    public $main;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'address' => 'address',
        'allowedModels' => 'allowedModels',
        'clientUuid' => 'clientUuid',
        'contact' => 'contact',
        'deleteTag' => 'deleteTag',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'main' => 'main',
        'name' => 'name',
        'remark' => 'remark',
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

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->main) {
            $res['main'] = $this->main;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
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

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['main'])) {
            $model->main = $map['main'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        return $model;
    }
}
