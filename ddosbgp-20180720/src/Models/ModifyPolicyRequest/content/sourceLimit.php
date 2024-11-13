<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyRequest\content;

use AlibabaCloud\Tea\Model;

class sourceLimit extends Model
{
    /**
     * @description The bandwidth limit on source IP addresses. Unit: bytes per second.
     *
     * @example 2048
     *
     * @var int
     */
    public $bps;

    /**
     * @description The packets per second (pps) limit on source IP addresses.
     *
     * @example 64
     *
     * @var int
     */
    public $pps;

    /**
     * @description The bandwidth limit on source SYN packets. Unit: bytes per second.
     *
     * @example 2048
     *
     * @var int
     */
    public $synBps;

    /**
     * @description The pps limit on source SYN packets.
     *
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
