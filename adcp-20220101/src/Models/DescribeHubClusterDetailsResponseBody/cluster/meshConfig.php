<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models\DescribeHubClusterDetailsResponseBody\cluster;

use AlibabaCloud\Tea\Model;

class meshConfig extends Model
{
    /**
     * @description Indicates whether ASM is enabled. Valid values:
     *
     *   true: ASM is enabled.
     *   false: ASM is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $enableMesh;

    /**
     * @description service mesh (ASM) instance ID
     *
     * @example cb09fda0dc2f94a8397c76638c7ecf***
     *
     * @var string
     */
    public $meshId;
    protected $_name = [
        'enableMesh' => 'EnableMesh',
        'meshId'     => 'MeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableMesh) {
            $res['EnableMesh'] = $this->enableMesh;
        }
        if (null !== $this->meshId) {
            $res['MeshId'] = $this->meshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return meshConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableMesh'])) {
            $model->enableMesh = $map['EnableMesh'];
        }
        if (isset($map['MeshId'])) {
            $model->meshId = $map['MeshId'];
        }

        return $model;
    }
}
