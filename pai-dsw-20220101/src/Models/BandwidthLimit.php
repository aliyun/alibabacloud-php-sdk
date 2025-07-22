<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Tea\Model;

class BandwidthLimit extends Model
{
    /**
     * @var string
     */
    public $egressRate;

    /**
     * @var string[]
     */
    public $egressWhitelists;

    /**
     * @var string
     */
    public $ingressRate;

    /**
     * @var string[]
     */
    public $ingressWhitelists;
    protected $_name = [
        'egressRate' => 'EgressRate',
        'egressWhitelists' => 'EgressWhitelists',
        'ingressRate' => 'IngressRate',
        'ingressWhitelists' => 'IngressWhitelists',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->egressRate) {
            $res['EgressRate'] = $this->egressRate;
        }
        if (null !== $this->egressWhitelists) {
            $res['EgressWhitelists'] = $this->egressWhitelists;
        }
        if (null !== $this->ingressRate) {
            $res['IngressRate'] = $this->ingressRate;
        }
        if (null !== $this->ingressWhitelists) {
            $res['IngressWhitelists'] = $this->ingressWhitelists;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BandwidthLimit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EgressRate'])) {
            $model->egressRate = $map['EgressRate'];
        }
        if (isset($map['EgressWhitelists'])) {
            if (!empty($map['EgressWhitelists'])) {
                $model->egressWhitelists = $map['EgressWhitelists'];
            }
        }
        if (isset($map['IngressRate'])) {
            $model->ingressRate = $map['IngressRate'];
        }
        if (isset($map['IngressWhitelists'])) {
            if (!empty($map['IngressWhitelists'])) {
                $model->ingressWhitelists = $map['IngressWhitelists'];
            }
        }

        return $model;
    }
}
