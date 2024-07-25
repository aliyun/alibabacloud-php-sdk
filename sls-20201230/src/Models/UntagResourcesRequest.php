<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class UntagResourcesRequest extends Model
{
    /**
     * @description Specifies whether to unbind all tags. Default value: false. Valid values:
     *
     *   false: unbinds only the tags that match the value of tags.
     *   true: unbinds all tags that are bound to the resource.
     *
     * @example false
     *
     * @var bool
     */
    public $all;

    /**
     * @description The resource IDs. Each time you call this operation, you can unbind tags only from a single resource. Therefore, you can enter only one resource ID.
     *
     * This parameter is required.
     * @example ali-test-project
     *
     * @var string[]
     */
    public $resourceId;

    /**
     * @description The type of the resource. Valid values:
     *
     *   project
     *   logstore
     *   dashboard
     *   machinegroup
     *   logtailconfig
     *
     * @example project
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tag keys. If you set all to false, only the tags that match the value of this parameter are unbound.
     *
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'all'          => 'all',
        'resourceId'   => 'resourceId',
        'resourceType' => 'resourceType',
        'tags'         => 'tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->all) {
            $res['all'] = $this->all;
        }
        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UntagResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['all'])) {
            $model->all = $map['all'];
        }
        if (isset($map['resourceId'])) {
            if (!empty($map['resourceId'])) {
                $model->resourceId = $map['resourceId'];
            }
        }
        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = $map['tags'];
            }
        }

        return $model;
    }
}
