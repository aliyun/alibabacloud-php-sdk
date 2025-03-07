<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\BatchCreateVodPackagingAssetRequest;

use AlibabaCloud\SDK\ICE\V20201109\Models\BatchCreateVodPackagingAssetRequest\assets\input;
use AlibabaCloud\Tea\Model;

class assets extends Model
{
    /**
     * @description The name of the asset. The name must be unique and can be up to 128 characters in length. Letters, digits, underscores (_), and hyphens (-) are supported.
     *
     * @example 30min_movie
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
     * @description The asset input configurations.
     *
     * @var input
     */
    public $input;
    protected $_name = [
        'assetName' => 'AssetName',
        'contentId' => 'ContentId',
        'input'     => 'Input',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetName) {
            $res['AssetName'] = $this->assetName;
        }
        if (null !== $this->contentId) {
            $res['ContentId'] = $this->contentId;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return assets
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
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }

        return $model;
    }
}
