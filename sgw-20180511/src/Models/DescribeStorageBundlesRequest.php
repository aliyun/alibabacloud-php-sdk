<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DescribeStorageBundlesRequest extends Model
{
    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $backendBucketRegionId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'backendBucketRegionId' => 'BackendBucketRegionId',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'securityToken'         => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendBucketRegionId) {
            $res['BackendBucketRegionId'] = $this->backendBucketRegionId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStorageBundlesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendBucketRegionId'])) {
            $model->backendBucketRegionId = $map['BackendBucketRegionId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
