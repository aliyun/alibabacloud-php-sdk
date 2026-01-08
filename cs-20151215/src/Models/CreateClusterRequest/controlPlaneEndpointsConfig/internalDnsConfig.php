<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest\controlPlaneEndpointsConfig;

use AlibabaCloud\Dara\Model;

class internalDnsConfig extends Model
{
    /**
     * @var string[]
     */
    public $bindVpcs;
    protected $_name = [
        'bindVpcs' => 'bind_vpcs',
    ];

    public function validate()
    {
        if (\is_array($this->bindVpcs)) {
            Model::validateArray($this->bindVpcs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindVpcs) {
            if (\is_array($this->bindVpcs)) {
                $res['bind_vpcs'] = [];
                $n1 = 0;
                foreach ($this->bindVpcs as $item1) {
                    $res['bind_vpcs'][$n1] = $item1;
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
        if (isset($map['bind_vpcs'])) {
            if (!empty($map['bind_vpcs'])) {
                $model->bindVpcs = [];
                $n1 = 0;
                foreach ($map['bind_vpcs'] as $item1) {
                    $model->bindVpcs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
