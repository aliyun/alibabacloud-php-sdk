<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class UpdateNodesShrinkRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The information about the compute nodes that you want to update.
     *
     * @var string
     */
    public $instancesShrink;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'instancesShrink' => 'Instances',
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
        if (null !== $this->instancesShrink) {
            $res['Instances'] = $this->instancesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateNodesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Instances'])) {
            $model->instancesShrink = $map['Instances'];
        }

        return $model;
    }
}
