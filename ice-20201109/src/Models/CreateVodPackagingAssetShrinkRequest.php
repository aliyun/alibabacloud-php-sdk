<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class CreateVodPackagingAssetShrinkRequest extends Model
{
    /**
     * @description The name of the asset. The name must be unique and can be up to 128 characters in length. Letters, digits, underscores (_), and hyphens (-) are supported.
     *
     * @example hls_3s
     *
     * @var string
     */
    public $assetName;

    /**
     * @description The content ID in the digital rights management (DRM) system. The maximum length is 256 characters. Letters, digits, underscores (_), and hyphens (-) are supported.
     *
     * @example movie
     *
     * @var string
     */
    public $contentId;

    /**
     * @description The asset description.
     *
     * @example HLS 3 second packaging
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the packaging group.
     *
     * @example vod_hls
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The asset input configurations.
     *
     * @var string
     */
    public $inputShrink;
    protected $_name = [
        'assetName' => 'AssetName',
        'contentId' => 'ContentId',
        'description' => 'Description',
        'groupName' => 'GroupName',
        'inputShrink' => 'Input',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetName) {
            $res['AssetName'] = $this->assetName;
        }
        if (null !== $this->contentId) {
            $res['ContentId'] = $this->contentId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->inputShrink) {
            $res['Input'] = $this->inputShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVodPackagingAssetShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssetName'])) {
            $model->assetName = $map['AssetName'];
        }
        if (isset($map['ContentId'])) {
            $model->contentId = $map['ContentId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Input'])) {
            $model->inputShrink = $map['Input'];
        }

        return $model;
    }
}
