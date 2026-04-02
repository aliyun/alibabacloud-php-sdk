<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class ModelRouterCreateClientRequest extends Model
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
    public $contact;

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
        'contact' => 'contact',
        'name' => 'name',
        'parentId' => 'parentId',
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

        if (null !== $this->contact) {
            $res['contact'] = $this->contact;
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

        if (isset($map['contact'])) {
            $model->contact = $map['contact'];
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
