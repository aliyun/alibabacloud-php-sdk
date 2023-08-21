<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class ListTagKeysRequest extends Model
{
    /**
     * @description The tag key for a fuzzy query.
     *
     * @example team
     *
     * @var string
     */
    public $keyFilter;

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
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request.
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
    protected $_name = [
        'keyFilter'    => 'KeyFilter',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyFilter) {
            $res['KeyFilter'] = $this->keyFilter;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTagKeysRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyFilter'])) {
            $model->keyFilter = $map['KeyFilter'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
