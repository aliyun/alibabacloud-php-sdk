<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\CreateClusterRequest;

use AlibabaCloud\Tea\Model;

class clusterCustomConfiguration extends Model
{
    /**
     * @description The runtime parameters of the script after the cluster is created.
     *
     * @example E-HPC cn-hangzhou
     *
     * @var string
     */
    public $args;

    /**
     * @description The URL that is used to download the post-processing script.
     *
     * @example http://*****
     *
     * @var string
     */
    public $script;
    protected $_name = [
        'args'   => 'Args',
        'script' => 'Script',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->args) {
            $res['Args'] = $this->args;
        }
        if (null !== $this->script) {
            $res['Script'] = $this->script;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterCustomConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Args'])) {
            $model->args = $map['Args'];
        }
        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }

        return $model;
    }
}
