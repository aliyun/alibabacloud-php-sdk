<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceByTagsResponseBody\items;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceByTagsResponseBody\items\DBInstanceTag\tags;
use AlibabaCloud\Tea\Model;

class DBInstanceTag extends Model
{
    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var tags
     */
    public $tags;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'tags'         => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceTag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
