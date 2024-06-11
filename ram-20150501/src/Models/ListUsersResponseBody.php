<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListUsersResponseBody\users;
use AlibabaCloud\Tea\Model;

class ListUsersResponseBody extends Model
{
    /**
     * @description Indicates whether the response is truncated.
     *
     * @example true
     *
     * @var bool
     */
    public $isTruncated;

    /**
     * @description The marker. This parameter is returned only if the value of `IsTruncated` is `true`. If the parameter is returned, you can call this operation again and set `Marker` to obtain the truncated part.``
     *
     * @example EXAMPLE
     *
     * @var string
     */
    public $marker;

    /**
     * @description The request ID.
     *
     * @example 4B450CA1-36E8-4AA2-8461-86B42BF4CC4E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The RAM users.
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
     * @return ListUsersResponseBody
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
