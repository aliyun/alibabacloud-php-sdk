<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class ListImagesRequest extends Model
{
    /**
     * @description 资源类型
     *
     * @var string
     */
    public $acceleratorTypeEquals;

    /**
     * @description 容器名称关键字
     *
     * @var string
     */
    public $imageNameContains;

    /**
     * @description 镜像类型
     *
     * @var string
     */
    public $imageTypeEquals;

    /**
     * @description 产品
     *
     * @var string
     */
    public $product;

    /**
     * @description 工作空间Id
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'acceleratorTypeEquals' => 'AcceleratorTypeEquals',
        'imageNameContains'     => 'ImageNameContains',
        'imageTypeEquals'       => 'ImageTypeEquals',
        'product'               => 'Product',
        'workspaceId'           => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorTypeEquals) {
            $res['AcceleratorTypeEquals'] = $this->acceleratorTypeEquals;
        }
        if (null !== $this->imageNameContains) {
            $res['ImageNameContains'] = $this->imageNameContains;
        }
        if (null !== $this->imageTypeEquals) {
            $res['ImageTypeEquals'] = $this->imageTypeEquals;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
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
        if (isset($map['AcceleratorTypeEquals'])) {
            $model->acceleratorTypeEquals = $map['AcceleratorTypeEquals'];
        }
        if (isset($map['ImageNameContains'])) {
            $model->imageNameContains = $map['ImageNameContains'];
        }
        if (isset($map['ImageTypeEquals'])) {
            $model->imageTypeEquals = $map['ImageTypeEquals'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
