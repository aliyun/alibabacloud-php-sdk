<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowCategoryResponseBody\categories;

use AlibabaCloud\Tea\Model;

class category extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $categoryType;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'type'         => 'Type',
        'parentId'     => 'ParentId',
        'objectType'   => 'ObjectType',
        'projectId'    => 'ProjectId',
        'objectId'     => 'ObjectId',
        'gmtCreate'    => 'GmtCreate',
        'name'         => 'Name',
        'gmtModified'  => 'GmtModified',
        'categoryType' => 'CategoryType',
        'id'           => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->categoryType) {
            $res['CategoryType'] = $this->categoryType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return category
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['CategoryType'])) {
            $model->categoryType = $map['CategoryType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
