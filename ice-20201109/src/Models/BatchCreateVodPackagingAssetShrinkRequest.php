<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class BatchCreateVodPackagingAssetShrinkRequest extends Model
{
    /**
     * @description The assets that you want to ingest.
     *
     * @var string
     */
    public $assetsShrink;

    /**
     * @description The name of the packaging group.
     *
     * @example vod_hls
     *
     * @var string
     */
    public $groupName;
    protected $_name = [
        'assetsShrink' => 'Assets',
        'groupName' => 'GroupName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetsShrink) {
            $res['Assets'] = $this->assetsShrink;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchCreateVodPackagingAssetShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Assets'])) {
            $model->assetsShrink = $map['Assets'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
