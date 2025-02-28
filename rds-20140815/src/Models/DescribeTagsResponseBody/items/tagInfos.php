<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTagsResponseBody\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTagsResponseBody\items\tagInfos\DBInstanceIds;

class tagInfos extends Model
{
    /**
     * @var DBInstanceIds
     */
    public $DBInstanceIds;
    /**
     * @var string
     */
    public $tagKey;
    /**
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
        if (null !== $this->DBInstanceIds) {
            $this->DBInstanceIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceIds) {
            $res['DBInstanceIds'] = null !== $this->DBInstanceIds ? $this->DBInstanceIds->toArray($noStream) : $this->DBInstanceIds;
        }

        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }

        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
