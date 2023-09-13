<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class ListApiDestinationsRequest extends Model
{
    /**
     * @description The prefix of the API destination name.
     *
     * @example api-demo
     *
     * @var string
     */
    public $apiDestinationNamePrefix;

    /**
     * @description The connection name.
     *
     * @example connection-name
     *
     * @var string
     */
    public $connectionName;

    /**
     * @description The maximum number of entries to be returned in a call. You can use this parameter and NextToken to implement paging.
     *
     *   Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description If you set Limit and excess return values exist, this parameter is returned.
     *
     *   Default value: 0.
     *
     * @example 0
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'apiDestinationNamePrefix' => 'ApiDestinationNamePrefix',
        'connectionName'           => 'ConnectionName',
        'maxResults'               => 'MaxResults',
        'nextToken'                => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiDestinationNamePrefix) {
            $res['ApiDestinationNamePrefix'] = $this->apiDestinationNamePrefix;
        }
        if (null !== $this->connectionName) {
            $res['ConnectionName'] = $this->connectionName;
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
     * @return ListApiDestinationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiDestinationNamePrefix'])) {
            $model->apiDestinationNamePrefix = $map['ApiDestinationNamePrefix'];
        }
        if (isset($map['ConnectionName'])) {
            $model->connectionName = $map['ConnectionName'];
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
