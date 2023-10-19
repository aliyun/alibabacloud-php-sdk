<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSplitItemBillRequest;

use AlibabaCloud\Tea\Model;

class tagFilter extends Model
{
    /**
     * @description The TagFilter.N parameter is used to query bills that match a specified tag. The value of the TagFilter.N parameter must be a key-value pair. The tag key must be 1 to 128 characters in length. Valid values of N: 1 to 20.
     *
     *   If only the TagFilter.N.TagKey parameter is specified, all bills associated with the tag key are queried.
     *   If you specify multiple tag key-value pairs at the same time, bills that meet any one of the tag key-value pairs are queried.
     *   If the tags added to resources change, you can query only the bills that are generated within the period in which the tags and resources are associated.
     *
     * @example TestKey
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description You can specify the TagValues.N parameter to query bills that match the specified tag value. The value of the TagValues.N parameter must be a string. The tag value must be 1 to 128 characters in length. Valid values of N: 1 to 20.
     *
     *   If you specify the TagValues.N parameter, the TagFilter.N.TagKey parameter is required. Otherwise, the error message InvalidParameter.TagValues is returned.
     *   If you specify multiple tag values, split bills that match one of the tag values are queried.
     *
     * @example TestValue
     *
     * @var string[]
     */
    public $tagValues;
    protected $_name = [
        'tagKey'    => 'TagKey',
        'tagValues' => 'TagValues',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->tagValues) {
            $res['TagValues'] = $this->tagValues;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagFilter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TagValues'])) {
            if (!empty($map['TagValues'])) {
                $model->tagValues = $map['TagValues'];
            }
        }

        return $model;
    }
}
