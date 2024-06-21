<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyContentRequest\content;

use AlibabaCloud\Tea\Model;

class sourceLimit extends Model
{
    /**
     * @example 2048
     *
     * @var int
     */
    public $bps;

    /**
     * @example 64
     *
     * @var int
     */
    public $pps;

    /**
     * @example 2048
     *
     * @var int
     */
    public $synBps;

    /**
     * @example 64
     *
     * @var int
     */
    public $synPps;
    protected $_name = [
        'bps'    => 'Bps',
        'pps'    => 'Pps',
        'synBps' => 'SynBps',
        'synPps' => 'SynPps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }
        if (null !== $this->pps) {
            $res['Pps'] = $this->pps;
        }
        if (null !== $this->synBps) {
            $res['SynBps'] = $this->synBps;
        }
        if (null !== $this->synPps) {
            $res['SynPps'] = $this->synPps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceLimit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['Pps'])) {
            $model->pps = $map['Pps'];
        }
        if (isset($map['SynBps'])) {
            $model->synBps = $map['SynBps'];
        }
        if (isset($map['SynPps'])) {
            $model->synPps = $map['SynPps'];
        }

        return $model;
    }
}
