<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableZoneResponseBody\data\availableZones\supportSpecifications;

use AlibabaCloud\Dara\Model;

class supportEngineVersions extends Model
{
    /**
     * @var string
     */
    public $obVersion;

    /**
     * @var bool
     */
    public $supportIsolationOptimization;

    /**
     * @var string[]
     */
    public $supportReplicaModes;
    protected $_name = [
        'obVersion' => 'ObVersion',
        'supportIsolationOptimization' => 'SupportIsolationOptimization',
        'supportReplicaModes' => 'SupportReplicaModes',
    ];

    public function validate()
    {
        if (\is_array($this->supportReplicaModes)) {
            Model::validateArray($this->supportReplicaModes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->obVersion) {
            $res['ObVersion'] = $this->obVersion;
        }

        if (null !== $this->supportIsolationOptimization) {
            $res['SupportIsolationOptimization'] = $this->supportIsolationOptimization;
        }

        if (null !== $this->supportReplicaModes) {
            if (\is_array($this->supportReplicaModes)) {
                $res['SupportReplicaModes'] = [];
                $n1 = 0;
                foreach ($this->supportReplicaModes as $item1) {
                    $res['SupportReplicaModes'][$n1++] = $item1;
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
        if (isset($map['ObVersion'])) {
            $model->obVersion = $map['ObVersion'];
        }

        if (isset($map['SupportIsolationOptimization'])) {
            $model->supportIsolationOptimization = $map['SupportIsolationOptimization'];
        }

        if (isset($map['SupportReplicaModes'])) {
            if (!empty($map['SupportReplicaModes'])) {
                $model->supportReplicaModes = [];
                $n1 = 0;
                foreach ($map['SupportReplicaModes'] as $item1) {
                    $model->supportReplicaModes[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
