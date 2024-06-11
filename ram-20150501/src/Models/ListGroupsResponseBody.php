<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListGroupsResponseBody\groups;
use AlibabaCloud\Tea\Model;

class ListGroupsResponseBody extends Model
{
    /**
     * @description The list of the RAM user groups.
     *
     * @var groups
     */
    public $groups;

    /**
     * @description Indicates whether the response is truncated.
     *
     * @example true
     *
     * @var bool
     */
    public $isTruncated;

    /**
     * @description The marker. This parameter is returned only if the value of `IsTruncated` is `true`. If `true` is returned, you can call this operation again and set the `Marker` parameter to obtain the truncated part.
     *
     * @example EXAMPLE
     *
     * @var string
     */
    public $marker;

    /**
     * @description The ID of the request.
     *
     * @example 065527AA-2F2E-AD7C-7484-F2626CFE4934
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'groups'      => 'Groups',
        'isTruncated' => 'IsTruncated',
        'marker'      => 'Marker',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groups) {
            $res['Groups'] = null !== $this->groups ? $this->groups->toMap() : null;
        }
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Groups'])) {
            $model->groups = groups::fromMap($map['Groups']);
        }
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
