<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeSecurityIpsResponseBody;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeSecurityIpsResponseBody\data\groupItems;
use AlibabaCloud\Tea\Model;

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
        'groupItems'     => 'GroupItems',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->groupItems) {
            $res['GroupItems'] = [];
            if (null !== $this->groupItems && \is_array($this->groupItems)) {
                $n = 0;
                foreach ($this->groupItems as $item) {
                    $res['GroupItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['GroupItems'])) {
            if (!empty($map['GroupItems'])) {
                $model->groupItems = [];
                $n                 = 0;
                foreach ($map['GroupItems'] as $item) {
                    $model->groupItems[$n++] = null !== $item ? groupItems::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
