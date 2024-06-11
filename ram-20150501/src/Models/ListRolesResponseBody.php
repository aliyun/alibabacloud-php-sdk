<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListRolesResponseBody\roles;
use AlibabaCloud\Tea\Model;

class ListRolesResponseBody extends Model
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
     * @description The marker. This parameter is returned only if the value of `IsTruncated` is `true`. If the value is `true`, you can call this operation again and set the `Marker` parameter to obtain the truncated part.
     *
     * @example EXAMPLE
     *
     * @var string
     */
    public $marker;

    /**
     * @description The ID of the request.
     *
     * @example 7B8A4E7D-6CFF-471D-84DF-195A7A241ECB
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information of RAM roles.
     *
     * @var roles
     */
    public $roles;
    protected $_name = [
        'isTruncated' => 'IsTruncated',
        'marker'      => 'Marker',
        'requestId'   => 'RequestId',
        'roles'       => 'Roles',
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
        if (null !== $this->roles) {
            $res['Roles'] = null !== $this->roles ? $this->roles->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRolesResponseBody
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
        if (isset($map['Roles'])) {
            $model->roles = roles::fromMap($map['Roles']);
        }

        return $model;
    }
}
