<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class NeuronApp extends Model
{
    /**
     * @var string
     */
    public $accessType;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $iconUrl;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'accessType' => 'accessType',
        'accountId' => 'accountId',
        'alias' => 'alias',
        'bizType' => 'bizType',
        'description' => 'description',
        'enterpriseId' => 'enterpriseId',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'iconUrl' => 'iconUrl',
        'id' => 'id',
        'name' => 'name',
        'owner' => 'owner',
        'productId' => 'productId',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['accessType'] = $this->accessType;
        }

        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }

        if (null !== $this->bizType) {
            $res['bizType'] = $this->bizType;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->enterpriseId) {
            $res['enterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->iconUrl) {
            $res['iconUrl'] = $this->iconUrl;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }

        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['accessType'])) {
            $model->accessType = $map['accessType'];
        }

        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }

        if (isset($map['bizType'])) {
            $model->bizType = $map['bizType'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['enterpriseId'])) {
            $model->enterpriseId = $map['enterpriseId'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['iconUrl'])) {
            $model->iconUrl = $map['iconUrl'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
