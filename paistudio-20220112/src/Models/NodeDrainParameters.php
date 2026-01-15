<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class NodeDrainParameters extends Model
{
    /**
     * @var string[]
     */
    public $podFromSubProducts;

    /**
     * @var string[]
     */
    public $podNames;
    protected $_name = [
        'podFromSubProducts' => 'PodFromSubProducts',
        'podNames' => 'PodNames',
    ];

    public function validate()
    {
        if (\is_array($this->podFromSubProducts)) {
            Model::validateArray($this->podFromSubProducts);
        }
        if (\is_array($this->podNames)) {
            Model::validateArray($this->podNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->podFromSubProducts) {
            if (\is_array($this->podFromSubProducts)) {
                $res['PodFromSubProducts'] = [];
                $n1 = 0;
                foreach ($this->podFromSubProducts as $item1) {
                    $res['PodFromSubProducts'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->podNames) {
            if (\is_array($this->podNames)) {
                $res['PodNames'] = [];
                $n1 = 0;
                foreach ($this->podNames as $item1) {
                    $res['PodNames'][$n1] = $item1;
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
        if (isset($map['PodFromSubProducts'])) {
            if (!empty($map['PodFromSubProducts'])) {
                $model->podFromSubProducts = [];
                $n1 = 0;
                foreach ($map['PodFromSubProducts'] as $item1) {
                    $model->podFromSubProducts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PodNames'])) {
            if (!empty($map['PodNames'])) {
                $model->podNames = [];
                $n1 = 0;
                foreach ($map['PodNames'] as $item1) {
                    $model->podNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
