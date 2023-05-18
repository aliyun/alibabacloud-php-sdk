<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models;

use AlibabaCloud\Tea\Model;

class ListTagValuesRequest extends Model
{
    /**
     * @description The maximum number of entries to return for a single request.
     *
     * Valid values: 1 to 100. Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used to start the next query.
     *
     * @example TGlzdFJlc291cm****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The resource type.
     *
     * The value Account indicates the members of the resource directory.
     * @example Account
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The tag key. This parameter specifies a filter condition for the query.
     *
     * @example k1
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The tag value for a fuzzy query.
     *
     * @example v1
     *
     * @var string
     */
    public $valueFilter;
    protected $_name = [
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'resourceType' => 'ResourceType',
        'tagKey'       => 'TagKey',
        'valueFilter'  => 'ValueFilter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->valueFilter) {
            $res['ValueFilter'] = $this->valueFilter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagValuesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['ValueFilter'])) {
            $model->valueFilter = $map['ValueFilter'];
        }

        return $model;
    }
}
