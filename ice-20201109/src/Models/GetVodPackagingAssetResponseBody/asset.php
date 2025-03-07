<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetVodPackagingAssetResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetVodPackagingAssetResponseBody\asset\egressEndpoints;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetVodPackagingAssetResponseBody\asset\input;
use AlibabaCloud\Tea\Model;

class asset extends Model
{
    /**
     * @description The name of the asset.
     *
     * @example 30min_movie
     *
     * @var string
     */
    public $assetName;

    /**
     * @description The content ID in the DRM system. The maximum length is 256 characters. Letters, digits, underscores (_), and hyphens (-) are supported.
     *
     * @example movie
     *
     * @var string
     */
    public $contentId;

    /**
     * @description The time when the asset was created. It follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2024-11-21T06:45:32Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The egress endpoints, each corresponding to a packaging configuration.
     *
     * @var egressEndpoints[]
     */
    public $egressEndpoints;

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
        'assetName'       => 'AssetName',
        'contentId'       => 'ContentId',
        'createTime'      => 'CreateTime',
        'egressEndpoints' => 'EgressEndpoints',
        'groupName'       => 'GroupName',
        'input'           => 'Input',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->egressEndpoints) {
            $res['EgressEndpoints'] = [];
            if (null !== $this->egressEndpoints && \is_array($this->egressEndpoints)) {
                $n = 0;
                foreach ($this->egressEndpoints as $item) {
                    $res['EgressEndpoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return asset
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EgressEndpoints'])) {
            if (!empty($map['EgressEndpoints'])) {
                $model->egressEndpoints = [];
                $n                      = 0;
                foreach ($map['EgressEndpoints'] as $item) {
                    $model->egressEndpoints[$n++] = null !== $item ? egressEndpoints::fromMap($item) : $item;
                }
            }
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
