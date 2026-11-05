<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DdosDiversion\V20230701\Models;

use AlibabaCloud\Dara\Model;

class ConfigNetStatusRequest extends Model
{
    /**
     * @var string
     */
    public $net;

    /**
     * @var string[]
     */
    public $regions;

    /**
     * @var string
     */
    public $saleId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $subNets;
    protected $_name = [
        'net' => 'Net',
        'regions' => 'Regions',
        'saleId' => 'SaleId',
        'status' => 'Status',
        'subNets' => 'SubNets',
    ];

    public function validate()
    {
        if (\is_array($this->regions)) {
            Model::validateArray($this->regions);
        }
        if (\is_array($this->subNets)) {
            Model::validateArray($this->subNets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->net) {
            $res['Net'] = $this->net;
        }

        if (null !== $this->regions) {
            if (\is_array($this->regions)) {
                $res['Regions'] = [];
                $n1 = 0;
                foreach ($this->regions as $item1) {
                    $res['Regions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->saleId) {
            $res['SaleId'] = $this->saleId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subNets) {
            if (\is_array($this->subNets)) {
                $res['SubNets'] = [];
                $n1 = 0;
                foreach ($this->subNets as $item1) {
                    $res['SubNets'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['Net'])) {
            $model->net = $map['Net'];
        }

        if (isset($map['Regions'])) {
            if (!empty($map['Regions'])) {
                $model->regions = [];
                $n1 = 0;
                foreach ($map['Regions'] as $item1) {
                    $model->regions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SaleId'])) {
            $model->saleId = $map['SaleId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubNets'])) {
            if (!empty($map['SubNets'])) {
                $model->subNets = [];
                $n1 = 0;
                foreach ($map['SubNets'] as $item1) {
                    $model->subNets[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
