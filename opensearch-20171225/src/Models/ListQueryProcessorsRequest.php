<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListQueryProcessorsRequest extends Model
{
    /**
     * @description The scope of query analysis rules to be queried. Default value: 0. Valid values:
     *
     *   0: queries all query analysis rules.
     *   1: queries the default query analysis rules.
     *   2: queries the query analysis rules that are not the default rules.
     *
     * @example 0
     *
     * @var int
     */
    public $isActive;
    protected $_name = [
        'isActive' => 'isActive',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isActive) {
            $res['isActive'] = $this->isActive;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListQueryProcessorsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['isActive'])) {
            $model->isActive = $map['isActive'];
        }

        return $model;
    }
}
