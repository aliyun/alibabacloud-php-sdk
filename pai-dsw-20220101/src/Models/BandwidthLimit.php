<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Dara\Model;

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

    public function validate()
    {
        if (\is_array($this->egressWhitelists)) {
            Model::validateArray($this->egressWhitelists);
        }
        if (\is_array($this->ingressWhitelists)) {
            Model::validateArray($this->ingressWhitelists);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->egressRate) {
            $res['EgressRate'] = $this->egressRate;
        }

        if (null !== $this->egressWhitelists) {
            if (\is_array($this->egressWhitelists)) {
                $res['EgressWhitelists'] = [];
                $n1 = 0;
                foreach ($this->egressWhitelists as $item1) {
                    $res['EgressWhitelists'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ingressRate) {
            $res['IngressRate'] = $this->ingressRate;
        }

        if (null !== $this->ingressWhitelists) {
            if (\is_array($this->ingressWhitelists)) {
                $res['IngressWhitelists'] = [];
                $n1 = 0;
                foreach ($this->ingressWhitelists as $item1) {
                    $res['IngressWhitelists'][$n1++] = $item1;
                }
            }
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
        if (isset($map['EgressRate'])) {
            $model->egressRate = $map['EgressRate'];
        }

        if (isset($map['EgressWhitelists'])) {
            if (!empty($map['EgressWhitelists'])) {
                $model->egressWhitelists = [];
                $n1 = 0;
                foreach ($map['EgressWhitelists'] as $item1) {
                    $model->egressWhitelists[$n1++] = $item1;
                }
            }
        }

        if (isset($map['IngressRate'])) {
            $model->ingressRate = $map['IngressRate'];
        }

        if (isset($map['IngressWhitelists'])) {
            if (!empty($map['IngressWhitelists'])) {
                $model->ingressWhitelists = [];
                $n1 = 0;
                foreach ($map['IngressWhitelists'] as $item1) {
                    $model->ingressWhitelists[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
