<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterNetInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterNetInfoResponseBody\DBNodeNetInfos\DBNodeNetInfo;

class DBNodeNetInfos extends Model
{
    /**
     * @var DBNodeNetInfo[]
     */
    public $DBNodeNetInfo;
    protected $_name = [
        'DBNodeNetInfo' => 'DBNodeNetInfo',
    ];

    public function validate()
    {
        if (\is_array($this->DBNodeNetInfo)) {
            Model::validateArray($this->DBNodeNetInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBNodeNetInfo) {
            if (\is_array($this->DBNodeNetInfo)) {
                $res['DBNodeNetInfo'] = [];
                $n1 = 0;
                foreach ($this->DBNodeNetInfo as $item1) {
                    $res['DBNodeNetInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DBNodeNetInfo'])) {
            if (!empty($map['DBNodeNetInfo'])) {
                $model->DBNodeNetInfo = [];
                $n1 = 0;
                foreach ($map['DBNodeNetInfo'] as $item1) {
                    $model->DBNodeNetInfo[$n1] = DBNodeNetInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
