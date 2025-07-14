<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class ListNodeGroupsRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example i119982311660892626523
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The number of entries per page. Maximum value: 100.
     *
     * Default value:
     *
     * • If you do not configure this parameter or if you set this parameter to a value less than 20, the default value is 20.
     *
     * • If you set this parameter to a value greater than 100, the default value is 100.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used in the next request to retrieve a new page of results.
     *
     * @example a3f2224a5ec7224116c4f5246120abe4
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The node group ID.
     *
     * @example ng-ec3c96ff0aa4c60d
     *
     * @var string
     */
    public $nodeGroupId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'nodeGroupId' => 'NodeGroupId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListNodeGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        return $model;
    }
}
