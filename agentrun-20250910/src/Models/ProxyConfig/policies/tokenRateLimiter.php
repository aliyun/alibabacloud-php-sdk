<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models\ProxyConfig\policies;

use AlibabaCloud\Dara\Model;

class tokenRateLimiter extends Model
{
    /**
     * @var int
     */
    public $tpd;

    /**
     * @var int
     */
    public $tph;

    /**
     * @var int
     */
    public $tpm;

    /**
     * @var int
     */
    public $tps;
    protected $_name = [
        'tpd' => 'tpd',
        'tph' => 'tph',
        'tpm' => 'tpm',
        'tps' => 'tps',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tpd) {
            $res['tpd'] = $this->tpd;
        }

        if (null !== $this->tph) {
            $res['tph'] = $this->tph;
        }

        if (null !== $this->tpm) {
            $res['tpm'] = $this->tpm;
        }

        if (null !== $this->tps) {
            $res['tps'] = $this->tps;
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
        if (isset($map['tpd'])) {
            $model->tpd = $map['tpd'];
        }

        if (isset($map['tph'])) {
            $model->tph = $map['tph'];
        }

        if (isset($map['tpm'])) {
            $model->tpm = $map['tpm'];
        }

        if (isset($map['tps'])) {
            $model->tps = $map['tps'];
        }

        return $model;
    }
}
