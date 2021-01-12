<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTagsResponseBody\items\tagInfos;

use AlibabaCloud\Tea\Model;

class DBInstanceIds extends Model
{
    /**
     * @var string[]
     */
    public $DBInstanceIds;
    protected $_name = [
        'DBInstanceIds' => 'DBInstanceIds',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceIds'])) {
            if (!empty($map['DBInstanceIds'])) {
                $model->DBInstanceIds = $map['DBInstanceIds'];
            }
        }

        return $model;
    }
}
