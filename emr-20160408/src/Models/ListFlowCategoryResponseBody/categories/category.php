<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListFlowCategoryResponseBody\categories;

use AlibabaCloud\Tea\Model;

class category extends Model
{
    /**
     * @example FILE
     *
     * @var string
     */
    public $categoryType;

    /**
     * @example 1563848015000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1563848015000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example FC-DF781BBF3F2E8317
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @example F-0B30759C146EA1E7
     *
     * @var string
     */
    public $objectId;

    /**
     * @example FLOW
     *
     * @var string
     */
    public $objectType;

    /**
     * @example FC-DF781BBF3F2E****
     *
     * @var string
     */
    public $parentId;

    /**
     * @example FP-179332E88F52****
     *
     * @var string
     */
    public $projectId;

    /**
     * @example FLOW
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'categoryType' => 'CategoryType',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'id'           => 'Id',
        'name'         => 'Name',
        'objectId'     => 'ObjectId',
        'objectType'   => 'ObjectType',
        'parentId'     => 'ParentId',
        'projectId'    => 'ProjectId',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryType) {
            $res['CategoryType'] = $this->categoryType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CategoryType'])) {
            $model->categoryType = $map['CategoryType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
