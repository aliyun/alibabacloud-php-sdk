<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyRequest\content;

use AlibabaCloud\Dara\Model;

class sourceLimit extends Model
{
    /**
     * @var int
     */
    public $bps;

    /**
     * @var int
     */
    public $pps;

    /**
     * @var int
     */
    public $synBps;

    /**
     * @var int
     */
    public $synPps;
    protected $_name = [
        'bps' => 'Bps',
        'pps' => 'Pps',
        'synBps' => 'SynBps',
        'synPps' => 'SynPps',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
