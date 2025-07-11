<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\ListRenderingDataPackagesResponseBody;

use AlibabaCloud\Tea\Model;

class dataPackages extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @example 2024-10-15T10:23:06+08:00
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example dp-449ea3d16c0841b8bf33ec5bbc86a152
     *
     * @var string
     */
    public $dataPackageId;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @example render-342012a227dc4ddf91f024639e43051a
     *
     * @var string
     */
    public $renderingInstanceId;

    /**
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @example available
     *
     * @var string
     */
    public $status;

    /**
     * @example 2024-12-06T02:03:59Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'category' => 'Category',
        'creationTime' => 'CreationTime',
        'dataPackageId' => 'DataPackageId',
        'description' => 'Description',
        'renderingInstanceId' => 'RenderingInstanceId',
        'size' => 'Size',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->dataPackageId) {
            $res['DataPackageId'] = $this->dataPackageId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataPackages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DataPackageId'])) {
            $model->dataPackageId = $map['DataPackageId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
