<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListUsersInRecycleBinResponseBody\users;
use AlibabaCloud\Tea\Model;

class ListUsersInRecycleBinResponseBody extends Model
{
    /**
     * @description Indicates whether the response is truncated. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $isTruncated;

    /**
     * @description The parameter that is used to obtain the truncated part. It takes effect only when `IsTruncated` is set to `true`.
     *
     * @example EXAMPLE
     *
     * @var string
     */
    public $marker;

    /**
     * @description The request ID.
     *
     * @example 3687BD52-49FD-585B-AB14-CD05B7C76963
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the RAM users.
     *
     * @var users
     */
    public $users;
    protected $_name = [
        'isTruncated' => 'IsTruncated',
        'marker'      => 'Marker',
        'requestId'   => 'RequestId',
        'users'       => 'Users',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->users) {
            $res['Users'] = null !== $this->users ? $this->users->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUsersInRecycleBinResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Users'])) {
            $model->users = users::fromMap($map['Users']);
        }

        return $model;
    }
}
