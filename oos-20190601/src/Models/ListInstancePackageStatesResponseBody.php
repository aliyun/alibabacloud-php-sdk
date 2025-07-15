<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\ListInstancePackageStatesResponseBody\packageStates;
use AlibabaCloud\Tea\Model;

class ListInstancePackageStatesResponseBody extends Model
{
    /**
     * @description Page size.
     *
     * @example 50
     *
     * @var string
     */
    public $maxResults;

    /**
     * @description Token string for pagination.
     *
     * @example MTRBMDc0NjAtRUJFNy00N0NBLTk3NTctzxxxxxxx
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description List of extensions
     *
     * @var packageStates[]
     */
    public $packageStates;

    /**
     * @description ID of the request
     *
     * @example 1306108F-610C-40FD-AAD5-XXXXXX
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'packageStates' => 'PackageStates',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->packageStates) {
            $res['PackageStates'] = [];
            if (null !== $this->packageStates && \is_array($this->packageStates)) {
                $n = 0;
                foreach ($this->packageStates as $item) {
                    $res['PackageStates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancePackageStatesResponseBody
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
        if (isset($map['PackageStates'])) {
            if (!empty($map['PackageStates'])) {
                $model->packageStates = [];
                $n = 0;
                foreach ($map['PackageStates'] as $item) {
                    $model->packageStates[$n++] = null !== $item ? packageStates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
