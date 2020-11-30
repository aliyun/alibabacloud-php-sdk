<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20171120\Models\DescribeTopTrafficResponse;

use AlibabaCloud\Tea\Model;

class trafficList extends Model
{
    /**
     * @var int
     */
    public $pps;

    /**
     * @var int
     */
    public $bps;

    /**
     * @var int
     */
    public $attackBps;

    /**
     * @var int
     */
    public $attackPps;

    /**
     * @var string
     */
    public $ip;
    protected $_name = [
        'pps'       => 'Pps',
        'bps'       => 'Bps',
        'attackBps' => 'AttackBps',
        'attackPps' => 'AttackPps',
        'ip'        => 'Ip',
    ];

    public function validate()
    {
        Model::validateRequired('pps', $this->pps, true);
        Model::validateRequired('bps', $this->bps, true);
        Model::validateRequired('attackBps', $this->attackBps, true);
        Model::validateRequired('attackPps', $this->attackPps, true);
        Model::validateRequired('ip', $this->ip, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pps) {
            $res['Pps'] = $this->pps;
        }
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }
        if (null !== $this->attackBps) {
            $res['AttackBps'] = $this->attackBps;
        }
        if (null !== $this->attackPps) {
            $res['AttackPps'] = $this->attackPps;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trafficList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pps'])) {
            $model->pps = $map['Pps'];
        }
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['AttackBps'])) {
            $model->attackBps = $map['AttackBps'];
        }
        if (isset($map['AttackPps'])) {
            $model->attackPps = $map['AttackPps'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}
