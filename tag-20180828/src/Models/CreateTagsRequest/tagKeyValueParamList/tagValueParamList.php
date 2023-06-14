<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models\CreateTagsRequest\tagKeyValueParamList;

use AlibabaCloud\Tea\Model;

class tagValueParamList extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @description The ID of the request.
     *
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
