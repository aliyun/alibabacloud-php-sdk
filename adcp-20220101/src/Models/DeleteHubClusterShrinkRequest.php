<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DeleteHubClusterShrinkRequest extends Model
{
    /**
     * @description The ID of the master instance.
     *
     * @example cd90dd24a86fd42f895a1b77df620****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Specifies whether to forcefully delete the master instance. Valid values: - true: forcefully delete the master instance. - false: does not forcefully delete the master instance. Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $force;

    /**
     * @var string
     */
    public $retainResourcesShrink;
    protected $_name = [
        'clusterId'             => 'ClusterId',
        'force'                 => 'Force',
        'retainResourcesShrink' => 'RetainResources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->retainResourcesShrink) {
            $res['RetainResources'] = $this->retainResourcesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteHubClusterShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['RetainResources'])) {
            $model->retainResourcesShrink = $map['RetainResources'];
        }

        return $model;
    }
}
