<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeSecurityIpsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeSecurityIpsResponseBody\data\groupItems;

class data extends Model
{
    /**
     * @var string
     */
    public $DBInstanceName;

    /**
     * @var groupItems[]
     */
    public $groupItems;
    protected $_name = [
        'DBInstanceName' => 'DBInstanceName',
        'groupItems' => 'GroupItems',
    ];

    public function validate()
    {
        if (\is_array($this->groupItems)) {
            Model::validateArray($this->groupItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }

        if (null !== $this->groupItems) {
            if (\is_array($this->groupItems)) {
                $res['GroupItems'] = [];
                $n1 = 0;
                foreach ($this->groupItems as $item1) {
                    $res['GroupItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }

        if (isset($map['GroupItems'])) {
            if (!empty($map['GroupItems'])) {
                $model->groupItems = [];
                $n1 = 0;
                foreach ($map['GroupItems'] as $item1) {
                    $model->groupItems[$n1++] = groupItems::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
