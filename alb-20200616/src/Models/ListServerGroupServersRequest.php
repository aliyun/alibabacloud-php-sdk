<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListServerGroupServersRequest\tag;
use AlibabaCloud\Tea\Model;

class ListServerGroupServersRequest extends Model
{
    /**
     * @description The maximum number of entries to return. Valid values: **1** to **100**. If you do not specify a value, the default value **20** is used.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   You do not need to specify this parameter for the first request.
     *   You must specify the token that is obtained from the previous query as the value of **NextToken**.
     *
     * @example FFmyTO70tTpLG6I3FmYAXG****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The server group ID.
     *
     * @example rg-atstuj3rtop****
     *
     * @var string
     */
    public $serverGroupId;

    /**
     * @description The IDs of the servers.
     *
     * @var string[]
     */
    public $serverIds;

    /**
     * @description The tags that are added to the server group. You can specify up to 10 tags in each call.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'maxResults'    => 'MaxResults',
        'nextToken'     => 'NextToken',
        'serverGroupId' => 'ServerGroupId',
        'serverIds'     => 'ServerIds',
        'tag'           => 'Tag',
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
        if (null !== $this->serverGroupId) {
            $res['ServerGroupId'] = $this->serverGroupId;
        }
        if (null !== $this->serverIds) {
            $res['ServerIds'] = $this->serverIds;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServerGroupServersRequest
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
        if (isset($map['ServerGroupId'])) {
            $model->serverGroupId = $map['ServerGroupId'];
        }
        if (isset($map['ServerIds'])) {
            if (!empty($map['ServerIds'])) {
                $model->serverIds = $map['ServerIds'];
            }
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
