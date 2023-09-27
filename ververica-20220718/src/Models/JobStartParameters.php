<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class JobStartParameters extends Model
{
    /**
     * @var string
     */
    public $deploymentId;

    /**
     * @var DeploymentRestoreStrategy
     */
    public $restoreStrategy;
    protected $_name = [
        'deploymentId'    => 'deploymentId',
        'restoreStrategy' => 'restoreStrategy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deploymentId) {
            $res['deploymentId'] = $this->deploymentId;
        }
        if (null !== $this->restoreStrategy) {
            $res['restoreStrategy'] = null !== $this->restoreStrategy ? $this->restoreStrategy->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JobStartParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deploymentId'])) {
            $model->deploymentId = $map['deploymentId'];
        }
        if (isset($map['restoreStrategy'])) {
            $model->restoreStrategy = DeploymentRestoreStrategy::fromMap($map['restoreStrategy']);
        }

        return $model;
    }
}
