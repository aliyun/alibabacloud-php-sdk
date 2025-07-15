<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeShowListResponseBody\showListInfo\showList\show;

use AlibabaCloud\Tea\Model;

class resourceInfo extends Model
{
    /**
     * @description The custom type label.
     *
     * @example 1
     *
     * @var int
     */
    public $liveInputType;

    /**
     * @description The ID of the video-on-demand (VOD) file.
     *
     * @example a2b8e671-2fe5-4642-a2ec-bf93880e****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the resource.
     *
     * @example vod
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The URL of the resource.
     *
     * @var string
     */
    public $resourceUrl;
    protected $_name = [
        'liveInputType' => 'LiveInputType',
        'resourceId' => 'ResourceId',
        'resourceType' => 'ResourceType',
        'resourceUrl' => 'ResourceUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->liveInputType) {
            $res['LiveInputType'] = $this->liveInputType;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->resourceUrl) {
            $res['ResourceUrl'] = $this->resourceUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LiveInputType'])) {
            $model->liveInputType = $map['LiveInputType'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ResourceUrl'])) {
            $model->resourceUrl = $map['ResourceUrl'];
        }

        return $model;
    }
}
