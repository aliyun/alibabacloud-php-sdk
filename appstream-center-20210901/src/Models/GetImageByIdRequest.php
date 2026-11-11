<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class GetImageByIdRequest extends Model
{
    /**
     * @var string
     */
    public $bizRegionId;

    /**
     * @var bool
     */
    public $ignoreFilter;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $showHidden;

    /**
     * @var string
     */
    public $versionId;
    protected $_name = [
        'bizRegionId' => 'BizRegionId',
        'ignoreFilter' => 'IgnoreFilter',
        'imageId' => 'ImageId',
        'productType' => 'ProductType',
        'showHidden' => 'ShowHidden',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }

        if (null !== $this->ignoreFilter) {
            $res['IgnoreFilter'] = $this->ignoreFilter;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->showHidden) {
            $res['ShowHidden'] = $this->showHidden;
        }

        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
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
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }

        if (isset($map['IgnoreFilter'])) {
            $model->ignoreFilter = $map['IgnoreFilter'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['ShowHidden'])) {
            $model->showHidden = $map['ShowHidden'];
        }

        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
