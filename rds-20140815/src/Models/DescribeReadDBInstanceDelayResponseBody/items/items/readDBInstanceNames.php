<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeReadDBInstanceDelayResponseBody\items\items;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->readDBInstanceName) {
            $res['ReadDBInstanceName'] = $this->readDBInstanceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return readDBInstanceNames
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReadDBInstanceName'])) {
            if (!empty($map['ReadDBInstanceName'])) {
                $model->readDBInstanceName = $map['ReadDBInstanceName'];
            }
        }

        return $model;
    }
}
