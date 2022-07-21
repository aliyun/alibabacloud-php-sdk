<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class ListImagesRequest extends Model
{
    /**
     * @description 加速器类型
     *
     * @var string
     */
    public $acceleratorType;

    /**
     * @description 镜像包含的框架类型
     *
     * @var string
     */
    public $framework;

    /**
     * @description 镜像类型
     *
     * @var string
     */
    public $imageProviderType;

    /**
     * @description 排序顺序
     *
     * @var string
     */
    public $order;

    /**
     * @description 按返回字段排序
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description 工作空间ID
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'acceleratorType'   => 'AcceleratorType',
        'framework'         => 'Framework',
        'imageProviderType' => 'ImageProviderType',
        'order'             => 'Order',
        'sortBy'            => 'SortBy',
        'workspaceId'       => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorType) {
            $res['AcceleratorType'] = $this->acceleratorType;
        }
        if (null !== $this->framework) {
            $res['Framework'] = $this->framework;
        }
        if (null !== $this->imageProviderType) {
            $res['ImageProviderType'] = $this->imageProviderType;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListImagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorType'])) {
            $model->acceleratorType = $map['AcceleratorType'];
        }
        if (isset($map['Framework'])) {
            $model->framework = $map['Framework'];
        }
        if (isset($map['ImageProviderType'])) {
            $model->imageProviderType = $map['ImageProviderType'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
