<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class ListGroupsRequest extends Model
{
    /**
     * @description The `marker`. If part of a previous response is truncated, you can use this parameter to obtain the truncated part.
     *
     * @example EXAMPLE
     *
     * @var string
     */
    public $marker;

    /**
     * @description The number of entries to return. If a response is truncated because it reaches the value of `MaxItems`, the value of `IsTruncated` will be `true`.
     *
     * Valid values: 1 to 100. Default value: 100.
     * @example 100
     *
     * @var int
     */
    public $maxItems;
    protected $_name = [
        'marker'   => 'Marker',
        'maxItems' => 'MaxItems',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListGroupsRequest
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

        return $model;
    }
}
