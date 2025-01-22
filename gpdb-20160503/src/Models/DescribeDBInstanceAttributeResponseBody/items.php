<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstanceAttributeResponseBody\items\DBInstanceAttribute;

class items extends Model
{
    /**
     * @var DBInstanceAttribute[]
     */
    public $DBInstanceAttribute;
    protected $_name = [
        'DBInstanceAttribute' => 'DBInstanceAttribute',
    ];

    public function validate()
    {
        if (\is_array($this->DBInstanceAttribute)) {
            Model::validateArray($this->DBInstanceAttribute);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceAttribute) {
            if (\is_array($this->DBInstanceAttribute)) {
                $res['DBInstanceAttribute'] = [];
                $n1                         = 0;
                foreach ($this->DBInstanceAttribute as $item1) {
                    $res['DBInstanceAttribute'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DBInstanceAttribute'])) {
            if (!empty($map['DBInstanceAttribute'])) {
                $model->DBInstanceAttribute = [];
                $n1                         = 0;
                foreach ($map['DBInstanceAttribute'] as $item1) {
                    $model->DBInstanceAttribute[$n1++] = DBInstanceAttribute::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
