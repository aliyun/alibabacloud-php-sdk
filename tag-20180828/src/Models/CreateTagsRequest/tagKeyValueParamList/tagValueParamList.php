<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models\CreateTagsRequest\tagKeyValueParamList;

use AlibabaCloud\Tea\Model;

class tagValueParamList extends Model
{
    /**
     * @description The description of the value for tag N.
     *
     * Valid values of N: 1 to 10.
     * @example Test environment
     *
     * @var string
     */
    public $description;

    /**
     * @description The value of tag N.
     *
     * Valid values of N: 1 to 10.
     * @example test
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'description' => 'Description',
        'value'       => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagValueParamList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
