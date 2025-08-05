<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAddressBookResponseBody\acls;

use AlibabaCloud\Tea\Model;

class tagList extends Model
{
    /**
     * @description The key of the ECS tag.
     *
     * @example company
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The value of the ECS tag.
     *
     * @example admin
     *
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'tagKey' => 'TagKey',
        'tagValue' => 'TagValue',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        return $model;
    }
}
