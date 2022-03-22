<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCcTopIpResponseBody\attackIpDataList;

use AlibabaCloud\Tea\Model;

class attackIpDatas extends Model
{
    /**
     * @var string
     */
    public $attackCount;

    /**
     * @var string
     */
    public $ip;
    protected $_name = [
        'attackCount' => 'AttackCount',
        'ip'          => 'Ip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attackCount) {
            $res['AttackCount'] = $this->attackCount;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
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
        if (isset($map['AttackCount'])) {
            $model->attackCount = $map['AttackCount'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}
