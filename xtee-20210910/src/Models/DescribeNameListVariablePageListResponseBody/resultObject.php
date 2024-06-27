<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeNameListVariablePageListResponseBody;

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
    public $description;

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
    public $nameListType;

    /**
     * @var string
     */
    public $refObjId;

    /**
     * @var int
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
        'description'  => 'description',
        'gmtCreate'    => 'gmtCreate',
        'gmtModified'  => 'gmtModified',
        'id'           => 'id',
        'leftCapacity' => 'leftCapacity',
        'name'         => 'name',
        'nameListType' => 'nameListType',
        'refObjId'     => 'refObjId',
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
        if (null !== $this->description) {
            $res['description'] = $this->description;
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
        if (null !== $this->nameListType) {
            $res['nameListType'] = $this->nameListType;
        }
        if (null !== $this->refObjId) {
            $res['refObjId'] = $this->refObjId;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
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
        if (isset($map['nameListType'])) {
            $model->nameListType = $map['nameListType'];
        }
        if (isset($map['refObjId'])) {
            $model->refObjId = $map['refObjId'];
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
