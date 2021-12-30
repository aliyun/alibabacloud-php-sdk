<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeTagsResponseBody;

use AlibabaCloud\Tea\Model;

class tagInfos extends Model
{
    /**
     * @description 标签关联数据库实例列表
     *
     * @var string[]
     */
    public $DBInstanceIds;

    /**
     * @description 标签Key
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description 标签Value
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
