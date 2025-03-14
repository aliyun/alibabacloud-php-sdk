<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListVodPackagingAssetsResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListVodPackagingAssetsResponseBody\assets\input;
use AlibabaCloud\Tea\Model;

class assets extends Model
{
    /**
     * @description The name of the VOD packaging asset.
     *
     * @example 30min_movie
     *
     * @var string
     */
    public $assetName;

    /**
     * @description The time when the asset was ingested. It follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2024-11-21T06:45:32Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The asset description.
     *
     * @example movie 30min
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
     * @var input
     */
    public $input;
    protected $_name = [
        'assetName' => 'AssetName',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'groupName' => 'GroupName',
        'input' => 'Input',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->assetName) {
            $res['AssetName'] = $this->assetName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }

        return $model;
    }
}
