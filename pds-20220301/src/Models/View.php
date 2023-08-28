<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class View extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed[]
     */
    public $exFieldsInfo;

    /**
     * @var int
     */
    public $fileCount;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $viewId;
    protected $_name = [
        'category'     => 'category',
        'createdAt'    => 'created_at',
        'description'  => 'description',
        'exFieldsInfo' => 'ex_fields_info',
        'fileCount'    => 'file_count',
        'name'         => 'name',
        'owner'        => 'owner',
        'updatedAt'    => 'updated_at',
        'viewId'       => 'view_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->createdAt) {
            $res['created_at'] = $this->createdAt;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->exFieldsInfo) {
            $res['ex_fields_info'] = $this->exFieldsInfo;
        }
        if (null !== $this->fileCount) {
            $res['file_count'] = $this->fileCount;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }
        if (null !== $this->updatedAt) {
            $res['updated_at'] = $this->updatedAt;
        }
        if (null !== $this->viewId) {
            $res['view_id'] = $this->viewId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return View
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['created_at'])) {
            $model->createdAt = $map['created_at'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['ex_fields_info'])) {
            $model->exFieldsInfo = $map['ex_fields_info'];
        }
        if (isset($map['file_count'])) {
            $model->fileCount = $map['file_count'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }
        if (isset($map['updated_at'])) {
            $model->updatedAt = $map['updated_at'];
        }
        if (isset($map['view_id'])) {
            $model->viewId = $map['view_id'];
        }

        return $model;
    }
}
