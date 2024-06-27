<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeVariableListResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var int
     */
    public $capacity;

    /**
     * @var string
     */
    public $defineId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed[]
     */
    public $extendInfo;

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
     * @var int
     */
    public $leftCapacity;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $outputsType;

    /**
     * @var string
     */
    public $refObjId;

    /**
     * @var string
     */
    public $refObjName;

    /**
     * @var string
     */
    public $refObjType;

    /**
     * @var string
     */
    public $sourceType;

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
    protected $_name = [
        'capacity'     => 'capacity',
        'defineId'     => 'defineId',
        'description'  => 'description',
        'extendInfo'   => 'extendInfo',
        'gmtCreate'    => 'gmtCreate',
        'gmtModified'  => 'gmtModified',
        'id'           => 'id',
        'leftCapacity' => 'leftCapacity',
        'name'         => 'name',
        'outputsType'  => 'outputsType',
        'refObjId'     => 'refObjId',
        'refObjName'   => 'refObjName',
        'refObjType'   => 'refObjType',
        'sourceType'   => 'sourceType',
        'title'        => 'title',
        'type'         => 'type',
        'userId'       => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capacity) {
            $res['capacity'] = $this->capacity;
        }
        if (null !== $this->defineId) {
            $res['defineId'] = $this->defineId;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->extendInfo) {
            $res['extendInfo'] = $this->extendInfo;
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
        if (null !== $this->leftCapacity) {
            $res['leftCapacity'] = $this->leftCapacity;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->outputsType) {
            $res['outputsType'] = $this->outputsType;
        }
        if (null !== $this->refObjId) {
            $res['refObjId'] = $this->refObjId;
        }
        if (null !== $this->refObjName) {
            $res['refObjName'] = $this->refObjName;
        }
        if (null !== $this->refObjType) {
            $res['refObjType'] = $this->refObjType;
        }
        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['capacity'])) {
            $model->capacity = $map['capacity'];
        }
        if (isset($map['defineId'])) {
            $model->defineId = $map['defineId'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['extendInfo'])) {
            $model->extendInfo = $map['extendInfo'];
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
        if (isset($map['leftCapacity'])) {
            $model->leftCapacity = $map['leftCapacity'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['outputsType'])) {
            $model->outputsType = $map['outputsType'];
        }
        if (isset($map['refObjId'])) {
            $model->refObjId = $map['refObjId'];
        }
        if (isset($map['refObjName'])) {
            $model->refObjName = $map['refObjName'];
        }
        if (isset($map['refObjType'])) {
            $model->refObjType = $map['refObjType'];
        }
        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
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

        return $model;
    }
}
