<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeExpressionVariableVersionDetailResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $createType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $expression;

    /**
     * @var string
     */
    public $expressionTitle;

    /**
     * @var string
     */
    public $expressionVariable;

    /**
     * @var int
     */
    public $fieldRank;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $invokeKey;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $outlier;

    /**
     * @var string
     */
    public $outputs;

    /**
     * @var string
     */
    public $refObjId;

    /**
     * @var string
     */
    public $refObjType;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'createType' => 'createType',
        'description' => 'description',
        'expression' => 'expression',
        'expressionTitle' => 'expressionTitle',
        'expressionVariable' => 'expressionVariable',
        'fieldRank' => 'fieldRank',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'invokeKey' => 'invokeKey',
        'name' => 'name',
        'outlier' => 'outlier',
        'outputs' => 'outputs',
        'refObjId' => 'refObjId',
        'refObjType' => 'refObjType',
        'region' => 'region',
        'sourceType' => 'sourceType',
        'status' => 'status',
        'title' => 'title',
        'type' => 'type',
        'userId' => 'userId',
        'version' => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createType) {
            $res['createType'] = $this->createType;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->expression) {
            $res['expression'] = $this->expression;
        }

        if (null !== $this->expressionTitle) {
            $res['expressionTitle'] = $this->expressionTitle;
        }

        if (null !== $this->expressionVariable) {
            $res['expressionVariable'] = $this->expressionVariable;
        }

        if (null !== $this->fieldRank) {
            $res['fieldRank'] = $this->fieldRank;
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

        if (null !== $this->invokeKey) {
            $res['invokeKey'] = $this->invokeKey;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->outlier) {
            $res['outlier'] = $this->outlier;
        }

        if (null !== $this->outputs) {
            $res['outputs'] = $this->outputs;
        }

        if (null !== $this->refObjId) {
            $res['refObjId'] = $this->refObjId;
        }

        if (null !== $this->refObjType) {
            $res['refObjType'] = $this->refObjType;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['createType'])) {
            $model->createType = $map['createType'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['expression'])) {
            $model->expression = $map['expression'];
        }

        if (isset($map['expressionTitle'])) {
            $model->expressionTitle = $map['expressionTitle'];
        }

        if (isset($map['expressionVariable'])) {
            $model->expressionVariable = $map['expressionVariable'];
        }

        if (isset($map['fieldRank'])) {
            $model->fieldRank = $map['fieldRank'];
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

        if (isset($map['invokeKey'])) {
            $model->invokeKey = $map['invokeKey'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['outlier'])) {
            $model->outlier = $map['outlier'];
        }

        if (isset($map['outputs'])) {
            $model->outputs = $map['outputs'];
        }

        if (isset($map['refObjId'])) {
            $model->refObjId = $map['refObjId'];
        }

        if (isset($map['refObjType'])) {
            $model->refObjType = $map['refObjType'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
