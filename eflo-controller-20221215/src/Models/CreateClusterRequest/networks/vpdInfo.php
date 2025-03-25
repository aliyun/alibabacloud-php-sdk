<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks;

use AlibabaCloud\Dara\Model;

class vpdInfo extends Model
{
    /**
     * @var string
     */
    public $vpdId;

    /**
     * @var string[]
     */
    public $vpdSubnets;
    protected $_name = [
        'vpdId' => 'VpdId',
        'vpdSubnets' => 'VpdSubnets',
    ];

    public function validate()
    {
        if (\is_array($this->vpdSubnets)) {
            Model::validateArray($this->vpdSubnets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }

        if (null !== $this->vpdSubnets) {
            if (\is_array($this->vpdSubnets)) {
                $res['VpdSubnets'] = [];
                $n1 = 0;
                foreach ($this->vpdSubnets as $item1) {
                    $res['VpdSubnets'][$n1++] = $item1;
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
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }

        if (isset($map['VpdSubnets'])) {
            if (!empty($map['VpdSubnets'])) {
                $model->vpdSubnets = [];
                $n1 = 0;
                foreach ($map['VpdSubnets'] as $item1) {
                    $model->vpdSubnets[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
