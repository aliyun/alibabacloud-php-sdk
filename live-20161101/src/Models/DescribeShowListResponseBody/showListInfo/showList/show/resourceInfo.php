<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeShowListResponseBody\showListInfo\showList\show;

use AlibabaCloud\Tea\Model;

class resourceInfo extends Model
{
    /**
     * @var int
     */
    public $liveInputType;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $resourceUrl;
    protected $_name = [
        'liveInputType' => 'LiveInputType',
        'resourceId'    => 'ResourceId',
        'resourceType'  => 'ResourceType',
        'resourceUrl'   => 'ResourceUrl',
    ];

    public function validate()
    {
    }

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
