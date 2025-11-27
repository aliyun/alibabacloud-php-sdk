<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceByTagsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceByTagsResponseBody\items\DBInstanceTag;

class items extends Model
{
    /**
     * @var DBInstanceTag[]
     */
    public $DBInstanceTag;
    protected $_name = [
        'DBInstanceTag' => 'DBInstanceTag',
    ];

    public function validate()
    {
        if (\is_array($this->DBInstanceTag)) {
            Model::validateArray($this->DBInstanceTag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceTag) {
            if (\is_array($this->DBInstanceTag)) {
                $res['DBInstanceTag'] = [];
                $n1 = 0;
                foreach ($this->DBInstanceTag as $item1) {
                    $res['DBInstanceTag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['DBInstanceTag'])) {
            if (!empty($map['DBInstanceTag'])) {
                $model->DBInstanceTag = [];
                $n1 = 0;
                foreach ($map['DBInstanceTag'] as $item1) {
                    $model->DBInstanceTag[$n1] = DBInstanceTag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
