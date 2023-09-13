<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class ListConnectionsRequest extends Model
{
    /**
     * @description The key word that you specify to query connections. Connections can be queried by prefixes.
     *
     * @example connection-name
     *
     * @var string
     */
    public $connectionNamePrefix;

    /**
     * @description The maximum number of entries to be returned in a single call. You can use this parameter and the NextToken parameter to implement paging.
     *
     *   Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description If you set the Limit parameter and excess return values exist, this parameter is returned.
     *
     *   Default value: 0.
     *
     * @example 0
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'connectionNamePrefix' => 'ConnectionNamePrefix',
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionNamePrefix) {
            $res['ConnectionNamePrefix'] = $this->connectionNamePrefix;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConnectionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionNamePrefix'])) {
            $model->connectionNamePrefix = $map['ConnectionNamePrefix'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
