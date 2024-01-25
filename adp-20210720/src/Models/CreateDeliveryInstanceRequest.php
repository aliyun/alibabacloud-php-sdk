<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\SDK\Adp\V20210720\Models\CreateDeliveryInstanceRequest\foundation;
use AlibabaCloud\SDK\Adp\V20210720\Models\CreateDeliveryInstanceRequest\products;
use AlibabaCloud\Tea\Model;

class CreateDeliveryInstanceRequest extends Model
{
    /**
     * @example f222c860-ebc7-4e93-b479-8e7f196deeef
     *
     * @var string
     */
    public $clusterUID;

    /**
     * @example deliver-cfg-x24xj0yDB4X9
     *
     * @var string
     */
    public $deliverableConfigUID;

    /**
     * @example deliver-3wEoymP6l4Jo
     *
     * @var string
     */
    public $deliverableUID;

    /**
     * @example 0f1b6f56-1206-4945-9b8a-a158f9240576
     *
     * @var string
     */
    public $envUID;

    /**
     * @var foundation
     */
    public $foundation;

    /**
     * @var products[]
     */
    public $products;

    /**
     * @var string
     */
    public $templateUID;
    protected $_name = [
        'clusterUID'           => 'clusterUID',
        'deliverableConfigUID' => 'deliverableConfigUID',
        'deliverableUID'       => 'deliverableUID',
        'envUID'               => 'envUID',
        'foundation'           => 'foundation',
        'products'             => 'products',
        'templateUID'          => 'templateUID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterUID) {
            $res['clusterUID'] = $this->clusterUID;
        }
        if (null !== $this->deliverableConfigUID) {
            $res['deliverableConfigUID'] = $this->deliverableConfigUID;
        }
        if (null !== $this->deliverableUID) {
            $res['deliverableUID'] = $this->deliverableUID;
        }
        if (null !== $this->envUID) {
            $res['envUID'] = $this->envUID;
        }
        if (null !== $this->foundation) {
            $res['foundation'] = null !== $this->foundation ? $this->foundation->toMap() : null;
        }
        if (null !== $this->products) {
            $res['products'] = [];
            if (null !== $this->products && \is_array($this->products)) {
                $n = 0;
                foreach ($this->products as $item) {
                    $res['products'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->templateUID) {
            $res['templateUID'] = $this->templateUID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDeliveryInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusterUID'])) {
            $model->clusterUID = $map['clusterUID'];
        }
        if (isset($map['deliverableConfigUID'])) {
            $model->deliverableConfigUID = $map['deliverableConfigUID'];
        }
        if (isset($map['deliverableUID'])) {
            $model->deliverableUID = $map['deliverableUID'];
        }
        if (isset($map['envUID'])) {
            $model->envUID = $map['envUID'];
        }
        if (isset($map['foundation'])) {
            $model->foundation = foundation::fromMap($map['foundation']);
        }
        if (isset($map['products'])) {
            if (!empty($map['products'])) {
                $model->products = [];
                $n               = 0;
                foreach ($map['products'] as $item) {
                    $model->products[$n++] = null !== $item ? products::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['templateUID'])) {
            $model->templateUID = $map['templateUID'];
        }

        return $model;
    }
}
