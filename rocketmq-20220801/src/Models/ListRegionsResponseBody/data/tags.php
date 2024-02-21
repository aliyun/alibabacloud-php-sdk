<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListRegionsResponseBody\data;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @example xx
     *
     * @var string
     */
    public $tagCode;

    /**
     * @example xx
     *
     * @var mixed
     */
    public $tagValue;
    protected $_name = [
        'tagCode'  => 'tagCode',
        'tagValue' => 'tagValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagCode) {
            $res['tagCode'] = $this->tagCode;
        }
        if (null !== $this->tagValue) {
            $res['tagValue'] = $this->tagValue;
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
        if (isset($map['tagCode'])) {
            $model->tagCode = $map['tagCode'];
        }
        if (isset($map['tagValue'])) {
            $model->tagValue = $map['tagValue'];
        }

        return $model;
    }
}
