<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancesResponseBody\items\DBInstance;

class items extends Model
{
    /**
     * @var DBInstance[]
     */
    public $DBInstance;
    protected $_name = [
        'DBInstance' => 'DBInstance',
    ];

    public function validate()
    {
        if (\is_array($this->DBInstance)) {
            Model::validateArray($this->DBInstance);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstance) {
            if (\is_array($this->DBInstance)) {
                $res['DBInstance'] = [];
                $n1                = 0;
                foreach ($this->DBInstance as $item1) {
                    $res['DBInstance'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DBInstance'])) {
            if (!empty($map['DBInstance'])) {
                $model->DBInstance = [];
                $n1                = 0;
                foreach ($map['DBInstance'] as $item1) {
                    $model->DBInstance[$n1++] = DBInstance::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
