<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class RLFlowTotals extends Model
{
    /**
     * @var int
     */
    public $inflight;

    /**
     * @var int
     */
    public $rewarded;

    /**
     * @var int
     */
    public $sampled;

    /**
     * @var int
     */
    public $trained;

    /**
     * @var int
     */
    public $trajs;

    /**
     * @var int
     */
    public $uids;
    protected $_name = [
        'inflight' => 'Inflight',
        'rewarded' => 'Rewarded',
        'sampled' => 'Sampled',
        'trained' => 'Trained',
        'trajs' => 'Trajs',
        'uids' => 'Uids',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inflight) {
            $res['Inflight'] = $this->inflight;
        }

        if (null !== $this->rewarded) {
            $res['Rewarded'] = $this->rewarded;
        }

        if (null !== $this->sampled) {
            $res['Sampled'] = $this->sampled;
        }

        if (null !== $this->trained) {
            $res['Trained'] = $this->trained;
        }

        if (null !== $this->trajs) {
            $res['Trajs'] = $this->trajs;
        }

        if (null !== $this->uids) {
            $res['Uids'] = $this->uids;
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
        if (isset($map['Inflight'])) {
            $model->inflight = $map['Inflight'];
        }

        if (isset($map['Rewarded'])) {
            $model->rewarded = $map['Rewarded'];
        }

        if (isset($map['Sampled'])) {
            $model->sampled = $map['Sampled'];
        }

        if (isset($map['Trained'])) {
            $model->trained = $map['Trained'];
        }

        if (isset($map['Trajs'])) {
            $model->trajs = $map['Trajs'];
        }

        if (isset($map['Uids'])) {
            $model->uids = $map['Uids'];
        }

        return $model;
    }
}
