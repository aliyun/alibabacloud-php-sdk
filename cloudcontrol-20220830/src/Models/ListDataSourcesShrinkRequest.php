<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models;

use AlibabaCloud\Tea\Model;

class ListDataSourcesShrinkRequest extends Model
{
    /**
     * @example RegionId
     *
     * @var string
     */
    public $attributeName;

    /**
     * @var string
     */
    public $filterShrink;
    protected $_name = [
        'attributeName' => 'attributeName',
        'filterShrink'  => 'filter',
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
        if (null !== $this->filterShrink) {
            $res['filter'] = $this->filterShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataSourcesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['attributeName'])) {
            $model->attributeName = $map['attributeName'];
        }
        if (isset($map['filter'])) {
            $model->filterShrink = $map['filter'];
        }

        return $model;
    }
}
