<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models;

use AlibabaCloud\Tea\Model;

class ListDataSourcesRequest extends Model
{
    /**
     * @example RegionId
     *
     * @var string
     */
    public $attributeName;

    /**
     * @var mixed[]
     */
    public $filter;
    protected $_name = [
        'attributeName' => 'attributeName',
        'filter'        => 'filter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributeName) {
            $res['attributeName'] = $this->attributeName;
        }
        if (null !== $this->filter) {
            $res['filter'] = $this->filter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataSourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['attributeName'])) {
            $model->attributeName = $map['attributeName'];
        }
        if (isset($map['filter'])) {
            $model->filter = $map['filter'];
        }

        return $model;
    }
}
