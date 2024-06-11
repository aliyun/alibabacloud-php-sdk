<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class ListPoliciesRequest extends Model
{
    /**
     * @description The `Marker`. If part of a previous response is truncated, you can use this parameter to obtain the truncated part.
     *
     * @example EXAMPLE
     *
     * @var string
     */
    public $marker;

    /**
     * @description The number of entries to return. If a response is truncated because it reaches the value of `MaxItems`, the value of `IsTruncated` will be `true`.
     *
     * Valid values: 1 to 1000. Default value: 100.
     * @example 100
     *
     * @var int
     */
    public $maxItems;

    /**
     * @description The type of the `Policy`. Valid values: `System` and `Custom`. If you do not specify the parameter, all policies are returned.
     *
     * @example System
     *
     * @var string
     */
    public $policyType;
    protected $_name = [
        'marker'     => 'Marker',
        'maxItems'   => 'MaxItems',
        'policyType' => 'PolicyType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->maxItems) {
            $res['MaxItems'] = $this->maxItems;
        }
        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPoliciesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['MaxItems'])) {
            $model->maxItems = $map['MaxItems'];
        }
        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        return $model;
    }
}
