<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListTagResourcesResponseBody\data;

use AlibabaCloud\Tea\Model;

class tagResources extends Model
{
    /**
     * @description UID of the resource owner.
     *
     * @example 1876441048322426
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description Tag category.
     *
     * @example custom
     *
     * @var string
     */
    public $category;

    /**
     * @description Resource ID.
     *
     * @example rmq-cn-pe334n08h08
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description Resource type.
     *
     * @example instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description Visibility scope.
     *
     * @example public
     *
     * @var string
     */
    public $scope;

    /**
     * @description Tag key.
     *
     * @example key
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description Tag value.
     *
     * @example value
     *
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'aliUid'       => 'aliUid',
        'category'     => 'category',
        'resourceId'   => 'resourceId',
        'resourceType' => 'resourceType',
        'scope'        => 'scope',
        'tagKey'       => 'tagKey',
        'tagValue'     => 'tagValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['aliUid'] = $this->aliUid;
        }
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->tagKey) {
            $res['tagKey'] = $this->tagKey;
        }
        if (null !== $this->tagValue) {
            $res['tagValue'] = $this->tagValue;
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
        if (isset($map['aliUid'])) {
            $model->aliUid = $map['aliUid'];
        }
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }
        if (isset($map['tagKey'])) {
            $model->tagKey = $map['tagKey'];
        }
        if (isset($map['tagValue'])) {
            $model->tagValue = $map['tagValue'];
        }

        return $model;
    }
}
