<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeNameListPageListResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
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
    public $name;

    /**
     * @var string
     */
    public $nameListType;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $value;

    /**
     * @var int
     */
    public $variableId;
    protected $_name = [
        'gmtCreate'    => 'gmtCreate',
        'gmtModified'  => 'gmtModified',
        'id'           => 'id',
        'name'         => 'name',
        'nameListType' => 'nameListType',
        'title'        => 'title',
        'userId'       => 'userId',
        'value'        => 'value',
        'variableId'   => 'variableId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nameListType) {
            $res['nameListType'] = $this->nameListType;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->variableId) {
            $res['variableId'] = $this->variableId;
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
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['nameListType'])) {
            $model->nameListType = $map['nameListType'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }
        if (isset($map['variableId'])) {
            $model->variableId = $map['variableId'];
        }

        return $model;
    }
}
