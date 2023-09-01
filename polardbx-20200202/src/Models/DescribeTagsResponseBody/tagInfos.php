<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeTagsResponseBody;

use AlibabaCloud\Tea\Model;

class tagInfos extends Model
{
    /**
     * @var string[]
     */
    public $DBInstanceIds;

    /**
     * @example testKey
     *
     * @var string
     */
    public $tagKey;

    /**
     * @example testValue
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
            $res['DBInstanceIds'] = $this->DBInstanceIds;
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
            if (!empty($map['DBInstanceIds'])) {
                $model->DBInstanceIds = $map['DBInstanceIds'];
            }
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
