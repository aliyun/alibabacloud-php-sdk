<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDdosAttackEventSourceIpsResponseBody;

use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDdosAttackEventSourceIpsResponseBody\data\ipList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var ipList[]
     */
    public $ipList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'ipList'     => 'IpList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipList) {
            $res['IpList'] = [];
            if (null !== $this->ipList && \is_array($this->ipList)) {
                $n = 0;
                foreach ($this->ipList as $item) {
                    $res['IpList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['IpList'])) {
            if (!empty($map['IpList'])) {
                $model->ipList = [];
                $n             = 0;
                foreach ($map['IpList'] as $item) {
                    $model->ipList[$n++] = null !== $item ? ipList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
