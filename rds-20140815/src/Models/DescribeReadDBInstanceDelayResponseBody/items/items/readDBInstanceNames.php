<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponseBody\items\items;

use AlibabaCloud\Dara\Model;

class readDBInstanceNames extends Model
{
    /**
     * @var string[]
     */
    public $readDBInstanceName;
    protected $_name = [
        'readDBInstanceName' => 'ReadDBInstanceName',
    ];

    public function validate()
    {
        if (\is_array($this->readDBInstanceName)) {
            Model::validateArray($this->readDBInstanceName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->readDBInstanceName) {
            if (\is_array($this->readDBInstanceName)) {
                $res['ReadDBInstanceName'] = [];
                $n1 = 0;
                foreach ($this->readDBInstanceName as $item1) {
                    $res['ReadDBInstanceName'][$n1++] = $item1;
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
        if (isset($map['ReadDBInstanceName'])) {
            if (!empty($map['ReadDBInstanceName'])) {
                $model->readDBInstanceName = [];
                $n1 = 0;
                foreach ($map['ReadDBInstanceName'] as $item1) {
                    $model->readDBInstanceName[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
