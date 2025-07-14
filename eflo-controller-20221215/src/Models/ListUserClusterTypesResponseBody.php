<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListUserClusterTypesResponseBody\clusterTypes;
use AlibabaCloud\Tea\Model;

class ListUserClusterTypesResponseBody extends Model
{
    /**
     * @description The list of cluster types. Number of elements in the array: 1 to 100.
     *
     * @var clusterTypes[]
     */
    public $clusterTypes;

    /**
     * @description NextToken for the next page. Include this value when requesting the next page.
     *
     * @example 3a6b93229825ac667104463b56790c91
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Id of the request
     *
     * @example 4FD06DF0-9167-5C6F-A145-F30CA4A15D54
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterTypes' => 'ClusterTypes',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterTypes) {
            $res['ClusterTypes'] = [];
            if (null !== $this->clusterTypes && \is_array($this->clusterTypes)) {
                $n = 0;
                foreach ($this->clusterTypes as $item) {
                    $res['ClusterTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserClusterTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterTypes'])) {
            if (!empty($map['ClusterTypes'])) {
                $model->clusterTypes = [];
                $n = 0;
                foreach ($map['ClusterTypes'] as $item) {
                    $model->clusterTypes[$n++] = null !== $item ? clusterTypes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
