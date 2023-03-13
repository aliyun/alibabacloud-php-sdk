<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\networks;

use AlibabaCloud\Tea\Model;

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
        'vpdId'      => 'VpdId',
        'vpdSubnets' => 'VpdSubnets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }
        if (null !== $this->vpdSubnets) {
            $res['VpdSubnets'] = $this->vpdSubnets;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpdInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }
        if (isset($map['VpdSubnets'])) {
            if (!empty($map['VpdSubnets'])) {
                $model->vpdSubnets = $map['VpdSubnets'];
            }
        }

        return $model;
    }
}
