<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTagsResponseBody\items;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTagsResponseBody\items\tagInfos\DBInstanceIds;
use AlibabaCloud\Tea\Model;

class tagInfos extends Model
{
    /**
     * @var DBInstanceIds
     */
    public $DBInstanceIds;

    /**
     * @var string
     */
    public $tagValue;

    /**
     * @var string
     */
    public $tagKey;
    protected $_name = [
        'DBInstanceIds' => 'DBInstanceIds',
        'tagValue'      => 'TagValue',
        'tagKey'        => 'TagKey',
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
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
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
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }

        return $model;
    }
}
