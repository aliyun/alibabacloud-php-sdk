<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\AddonMeta\environments;

use AlibabaCloud\Tea\Model;

class dependencies extends Model
{
    /**
     * @var string[]
     */
    public $clusterTypes;

    /**
     * @var bool[]
     */
    public $features;

    /**
     * @var string[]
     */
    public $services;
    protected $_name = [
        'clusterTypes' => 'clusterTypes',
        'features' => 'features',
        'services' => 'services',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterTypes) {
            $res['clusterTypes'] = $this->clusterTypes;
        }
        if (null !== $this->features) {
            $res['features'] = $this->features;
        }
        if (null !== $this->services) {
            $res['services'] = $this->services;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dependencies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusterTypes'])) {
            if (!empty($map['clusterTypes'])) {
                $model->clusterTypes = $map['clusterTypes'];
            }
        }
        if (isset($map['features'])) {
            $model->features = $map['features'];
        }
        if (isset($map['services'])) {
            if (!empty($map['services'])) {
                $model->services = $map['services'];
            }
        }

        return $model;
    }
}
