<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribeSplitItemBillRequest;

use AlibabaCloud\Tea\Model;

class tagFilter extends Model
{
    /**
     * @var string
     */
    public $tagKey;

    /**
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
