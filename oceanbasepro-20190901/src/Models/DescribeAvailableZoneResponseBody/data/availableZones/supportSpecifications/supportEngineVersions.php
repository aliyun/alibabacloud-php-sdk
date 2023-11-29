<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableZoneResponseBody\data\availableZones\supportSpecifications;

use AlibabaCloud\Tea\Model;

class supportEngineVersions extends Model
{
    /**
     * @example 3.2.4.4
     *
     * @var string
     */
    public $obVersion;

    /**
     * @example true
     *
     * @var bool
     */
    public $supportIsolationOptimization;

    /**
     * @var string[]
     */
    public $supportReplicaModes;
    protected $_name = [
        'obVersion'                    => 'ObVersion',
        'supportIsolationOptimization' => 'SupportIsolationOptimization',
        'supportReplicaModes'          => 'SupportReplicaModes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->obVersion) {
            $res['ObVersion'] = $this->obVersion;
        }
        if (null !== $this->supportIsolationOptimization) {
            $res['SupportIsolationOptimization'] = $this->supportIsolationOptimization;
        }
        if (null !== $this->supportReplicaModes) {
            $res['SupportReplicaModes'] = $this->supportReplicaModes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportEngineVersions
     */
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
                $model->supportReplicaModes = $map['SupportReplicaModes'];
            }
        }

        return $model;
    }
}
