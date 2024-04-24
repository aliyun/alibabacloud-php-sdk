<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\ListTagResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class tagResources extends Model
{
    /**
     * @description The resource ID.
     *
     * @example c754d2a4-28f1-46df-b557-9586173a****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of the resource. ALIYUN::WAF::DEFENSERESOURCE is returned.
     *
     * @example ALIYUN::WAF::DEFENSERESOURCE
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The key of tag N that is added to the resource.
     *
     * @example TagKey1
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The value of tag N that is added to the resource.
     *
     * @example TayValue1
     *
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'tagKey'       => 'TagKey',
        'tagValue'     => 'TagValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagResources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        return $model;
    }
}
