<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PdpLaneInfo extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var int
     */
    public $companyId;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $creatorUid;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $initGroupFlag;

    /**
     * @var string
     */
    public $inletServices;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $serviceGroupIds;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'alias' => 'alias',
        'companyId' => 'companyId',
        'creatorName' => 'creatorName',
        'creatorUid' => 'creatorUid',
        'description' => 'description',
        'env' => 'env',
        'gmtCreate' => 'gmtCreate',
        'id' => 'id',
        'initGroupFlag' => 'initGroupFlag',
        'inletServices' => 'inletServices',
        'name' => 'name',
        'productId' => 'productId',
        'productName' => 'productName',
        'serviceGroupIds' => 'serviceGroupIds',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }

        if (null !== $this->companyId) {
            $res['companyId'] = $this->companyId;
        }

        if (null !== $this->creatorName) {
            $res['creatorName'] = $this->creatorName;
        }

        if (null !== $this->creatorUid) {
            $res['creatorUid'] = $this->creatorUid;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->env) {
            $res['env'] = $this->env;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->initGroupFlag) {
            $res['initGroupFlag'] = $this->initGroupFlag;
        }

        if (null !== $this->inletServices) {
            $res['inletServices'] = $this->inletServices;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }

        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }

        if (null !== $this->serviceGroupIds) {
            $res['serviceGroupIds'] = $this->serviceGroupIds;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }

        if (isset($map['companyId'])) {
            $model->companyId = $map['companyId'];
        }

        if (isset($map['creatorName'])) {
            $model->creatorName = $map['creatorName'];
        }

        if (isset($map['creatorUid'])) {
            $model->creatorUid = $map['creatorUid'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['env'])) {
            $model->env = $map['env'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['initGroupFlag'])) {
            $model->initGroupFlag = $map['initGroupFlag'];
        }

        if (isset($map['inletServices'])) {
            $model->inletServices = $map['inletServices'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }

        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }

        if (isset($map['serviceGroupIds'])) {
            $model->serviceGroupIds = $map['serviceGroupIds'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
