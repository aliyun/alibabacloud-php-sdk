<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models;

use AlibabaCloud\Tea\Model;

class ListResourceTypesShrinkRequest extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example ECS::Disk
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $resourceTypesShrink;
    protected $_name = [
        'maxResults'          => 'maxResults',
        'nextToken'           => 'nextToken',
        'resourceTypesShrink' => 'resourceTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->resourceTypesShrink) {
            $res['resourceTypes'] = $this->resourceTypesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceTypesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['resourceTypes'])) {
            $model->resourceTypesShrink = $map['resourceTypes'];
        }

        return $model;
    }
}
