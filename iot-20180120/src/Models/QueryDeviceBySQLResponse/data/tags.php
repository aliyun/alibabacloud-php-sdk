<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceBySQLResponse\data;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @var string
     */
    public $tagName;

    /**
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'tagName'  => 'TagName',
        'tagValue' => 'TagValue',
    ];

    public function validate()
    {
        Model::validateRequired('tagName', $this->tagName, true);
        Model::validateRequired('tagValue', $this->tagValue, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagName) {
            $res['TagName'] = $this->tagName;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagName'])) {
            $model->tagName = $map['TagName'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        return $model;
    }
}
