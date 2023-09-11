<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\ListTagResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class tagResources extends Model
{
    /**
     * @description The UID of the Alibaba Cloud account.
     *
     * @example 1429****39299349
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description The type of the tag. Valid values:
     *
     *   **Custom**
     *   **System**
     *   **All**
     *
     * @example All
     *
     * @var string
     */
    public $category;

    /**
     * @description The region information.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionNo;

    /**
     * @description The resource ID.
     *
     * @example nlb-nrnrxwd15en27r****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The type of resource. Valid values:
     *
     *   **loadbalancer**: an NLB instance
     *   **securitypolicy**: a security policy
     *   **servergroup**: a server group
     *
     * @example loadbalancer
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The visible range of the tags.
     *
     * @example public
     *
     * @var string
     */
    public $scope;

    /**
     * @description The tag key.
     *
     * @example env
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The tag value.
     *
     * @example product
     *
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'aliUid'       => 'AliUid',
        'category'     => 'Category',
        'regionNo'     => 'RegionNo',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'scope'        => 'Scope',
        'tagKey'       => 'TagKey',
        'tagValue'     => 'TagValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
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
