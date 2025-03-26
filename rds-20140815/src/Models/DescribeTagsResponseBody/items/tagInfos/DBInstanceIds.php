<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeTagsResponseBody\items\tagInfos;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->DBInstanceIds)) {
            Model::validateArray($this->DBInstanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceIds) {
            if (\is_array($this->DBInstanceIds)) {
                $res['DBInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->DBInstanceIds as $item1) {
                    $res['DBInstanceIds'][$n1++] = $item1;
                }
            }
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
            if (!empty($map['DBInstanceIds'])) {
                $model->DBInstanceIds = [];
                $n1 = 0;
                foreach ($map['DBInstanceIds'] as $item1) {
                    $model->DBInstanceIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
