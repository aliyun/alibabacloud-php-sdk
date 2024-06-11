<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesResponseBody\policies;
use AlibabaCloud\Tea\Model;

class ListPoliciesResponseBody extends Model
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
     * @description The marker. This parameter is returned only if the value of `IsTruncated` is `true`. If the value of IsTruncated is `true`, you can call this operation again and set `Marker` to obtain the truncated part.
     *
     * @example EXAMPLE
     *
     * @var string
     */
    public $marker;

    /**
     * @description The list of policies.
     *
     * @var policies
     */
    public $policies;

    /**
     * @description The ID of the request.
     *
     * @example 7B8A4E7D-6CFF-471D-84DF-195A7A241ECB
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'isTruncated' => 'IsTruncated',
        'marker'      => 'Marker',
        'policies'    => 'Policies',
        'requestId'   => 'RequestId',
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
        if (null !== $this->policies) {
            $res['Policies'] = null !== $this->policies ? $this->policies->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPoliciesResponseBody
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
        if (isset($map['Policies'])) {
            $model->policies = policies::fromMap($map['Policies']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
