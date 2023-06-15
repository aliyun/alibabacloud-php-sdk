<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTagsResponseBody\items;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTagsResponseBody\items\tagInfos\DBInstanceIds;
use AlibabaCloud\Tea\Model;

class tagInfos extends Model
{
    /**
     * @description The IDs of the instances to which the tag is added.
     *
     * @var DBInstanceIds
     */
    public $DBInstanceIds;

    /**
     * @description The key of the tag.
     *
     * @example key1
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The value of the tag.
     *
     * @example value1
     *
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'DBInstanceIds' => 'DBInstanceIds',
        'tagKey'        => 'TagKey',
        'tagValue'      => 'TagValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceIds) {
            $res['DBInstanceIds'] = null !== $this->DBInstanceIds ? $this->DBInstanceIds->toMap() : null;
        }
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
     * @return tagInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceIds'])) {
            $model->DBInstanceIds = DBInstanceIds::fromMap($map['DBInstanceIds']);
        }
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        return $model;
    }
}
