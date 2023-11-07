<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models;

use AlibabaCloud\Tea\Model;

class GetAccessKeyLastUsedResourcesRequest extends Model
{
    /**
     * @description The AccessKey ID.
     *
     * @example LTAI4Fz1ykT4qxgNMvN6****
     *
     * @var string
     */
    public $accessKey;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * > The request parameters must be the same as those of the last request.
     * @example eyJhY2NvdW50IjoiMTQyNDM3OTU4NjM4NzE2MSIsImV2ZW50SWQiOiI3MkJDRTExRi02OTU3LTQ0NUItQjY0MC1CNEUyMkM4NUEwQzgiLCJsb2dJZCI6IjgyLTE0MjQzNzk1ODYzODcxNjEiLCJ0aW1lIjoxNjAyMzExNTQwMD****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The number of entries per page.
     *
     *   Valid values: 0 to 100.
     *   Default value: 20.
     *
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The Alibaba Cloud service. For more information about the Alibaba Cloud services supported by ActionTrail, see [Supported Alibaba Cloud services](~~28829~~).
     *
     * @example Ecs
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'accessKey'   => 'AccessKey',
        'nextToken'   => 'NextToken',
        'pageSize'    => 'PageSize',
        'serviceName' => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccessKeyLastUsedResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
