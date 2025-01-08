<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentAddonsResponseBody\data\addons\environments;

use AlibabaCloud\Tea\Model;

class dependencies extends Model
{
    /**
     * @description The cluster type.
     *
     * @var string[]
     */
    public $clusterTypes;

    /**
     * @description The feature that can be installed in the environment.
     *
     * @var bool[]
     */
    public $features;

    /**
     * @description The services.
     *
     * @var string[]
     */
    public $services;
    protected $_name = [
        'clusterTypes' => 'ClusterTypes',
        'features'     => 'Features',
        'services'     => 'Services',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterTypes) {
            $res['ClusterTypes'] = $this->clusterTypes;
        }
        if (null !== $this->features) {
            $res['Features'] = $this->features;
        }
        if (null !== $this->services) {
            $res['Services'] = $this->services;
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
        if (isset($map['ClusterTypes'])) {
            if (!empty($map['ClusterTypes'])) {
                $model->clusterTypes = $map['ClusterTypes'];
            }
        }
        if (isset($map['Features'])) {
            $model->features = $map['Features'];
        }
        if (isset($map['Services'])) {
            if (!empty($map['Services'])) {
                $model->services = $map['Services'];
            }
        }

        return $model;
    }
}
