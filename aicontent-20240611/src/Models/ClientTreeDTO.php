<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ClientTreeDTO extends Model
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
     * @var ClientTreeDTO[]
     */
    public $children;

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
     * @var int
     */
    public $parentId;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'address' => 'address',
        'allowedModels' => 'allowedModels',
        'children' => 'children',
        'clientUuid' => 'clientUuid',
        'contact' => 'contact',
        'deleteTag' => 'deleteTag',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'level' => 'level',
        'main' => 'main',
        'name' => 'name',
        'parentId' => 'parentId',
        'remark' => 'remark',
    ];

    public function validate()
    {
        if (\is_array($this->children)) {
            Model::validateArray($this->children);
        }
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

        if (null !== $this->children) {
            if (\is_array($this->children)) {
                $res['children'] = [];
                $n1 = 0;
                foreach ($this->children as $item1) {
                    $res['children'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->level) {
            $res['level'] = $this->level;
        }

        if (null !== $this->main) {
            $res['main'] = $this->main;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->parentId) {
            $res['parentId'] = $this->parentId;
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

        if (isset($map['children'])) {
            if (!empty($map['children'])) {
                $model->children = [];
                $n1 = 0;
                foreach ($map['children'] as $item1) {
                    $model->children[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        if (isset($map['main'])) {
            $model->main = $map['main'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['parentId'])) {
            $model->parentId = $map['parentId'];
        }

        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }

        return $model;
    }
}
