<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCcTopIpResponseBody\attackIpDataList;

use AlibabaCloud\Tea\Model;

class attackIpDatas extends Model
{
    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $attackCount;
    protected $_name = [
        'ip'          => 'Ip',
        'attackCount' => 'AttackCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->attackCount) {
            $res['AttackCount'] = $this->attackCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attackIpDatas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['AttackCount'])) {
            $model->attackCount = $map['AttackCount'];
        }

        return $model;
    }
}
