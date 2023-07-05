<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\Tea\Model;

class CheckResourceSupportOperateResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 8D8992C1-6712-423C-BAC5-E5E817484C6B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the service resource can be downgraded. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $resourceCanBeDowngraded;

    /**
     * @description Indicates whether the zone where the service resource is deployed can be deleted. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $resourceZoneCanBeDeleted;
    protected $_name = [
        'requestId'                => 'RequestId',
        'resourceCanBeDowngraded'  => 'ResourceCanBeDowngraded',
        'resourceZoneCanBeDeleted' => 'ResourceZoneCanBeDeleted',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceCanBeDowngraded) {
            $res['ResourceCanBeDowngraded'] = $this->resourceCanBeDowngraded;
        }
        if (null !== $this->resourceZoneCanBeDeleted) {
            $res['ResourceZoneCanBeDeleted'] = $this->resourceZoneCanBeDeleted;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckResourceSupportOperateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceCanBeDowngraded'])) {
            $model->resourceCanBeDowngraded = $map['ResourceCanBeDowngraded'];
        }
        if (isset($map['ResourceZoneCanBeDeleted'])) {
            $model->resourceZoneCanBeDeleted = $map['ResourceZoneCanBeDeleted'];
        }

        return $model;
    }
}
