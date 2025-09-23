<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterNetInfoResponseBody\DBNodeNetInfos\DBNodeNetInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterNetInfoResponseBody\DBNodeNetInfos\DBNodeNetInfo\netInfos\netInfo;

class netInfos extends Model
{
    /**
     * @var netInfo[]
     */
    public $netInfo;
    protected $_name = [
        'netInfo' => 'NetInfo',
    ];

    public function validate()
    {
        if (\is_array($this->netInfo)) {
            Model::validateArray($this->netInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->netInfo) {
            if (\is_array($this->netInfo)) {
                $res['NetInfo'] = [];
                $n1 = 0;
                foreach ($this->netInfo as $item1) {
                    $res['NetInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NetInfo'])) {
            if (!empty($map['NetInfo'])) {
                $model->netInfo = [];
                $n1 = 0;
                foreach ($map['NetInfo'] as $item1) {
                    $model->netInfo[$n1] = netInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
