<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gws\V20190618\Models;

use AlibabaCloud\Tea\Model;

class SetInstancePolicyRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $visualLossless;

    /**
     * @var string
     */
    public $optimizeFor3d;

    /**
     * @var bool
     */
    public $asyncMode;
    protected $_name = [
        'instanceId'     => 'InstanceId',
        'visualLossless' => 'VisualLossless',
        'optimizeFor3d'  => 'OptimizeFor3d',
        'asyncMode'      => 'AsyncMode',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->visualLossless) {
            $res['VisualLossless'] = $this->visualLossless;
        }
        if (null !== $this->optimizeFor3d) {
            $res['OptimizeFor3d'] = $this->optimizeFor3d;
        }
        if (null !== $this->asyncMode) {
            $res['AsyncMode'] = $this->asyncMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetInstancePolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['VisualLossless'])) {
            $model->visualLossless = $map['VisualLossless'];
        }
        if (isset($map['OptimizeFor3d'])) {
            $model->optimizeFor3d = $map['OptimizeFor3d'];
        }
        if (isset($map['AsyncMode'])) {
            $model->asyncMode = $map['AsyncMode'];
        }

        return $model;
    }
}
