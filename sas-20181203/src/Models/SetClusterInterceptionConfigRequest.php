<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class SetClusterInterceptionConfigRequest extends Model
{
    /**
     * @example c60b77fe62093480db6164a3c2fa****
     *
     * @var string
     */
    public $clusterIds;

    /**
     * @example 1
     *
     * @var int
     */
    public $switchOn;

    /**
     * @example 0
     *
     * @var int
     */
    public $switchType;
    protected $_name = [
        'clusterIds' => 'ClusterIds',
        'switchOn'   => 'SwitchOn',
        'switchType' => 'SwitchType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterIds) {
            $res['ClusterIds'] = $this->clusterIds;
        }
        if (null !== $this->switchOn) {
            $res['SwitchOn'] = $this->switchOn;
        }
        if (null !== $this->switchType) {
            $res['SwitchType'] = $this->switchType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetClusterInterceptionConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterIds'])) {
            $model->clusterIds = $map['ClusterIds'];
        }
        if (isset($map['SwitchOn'])) {
            $model->switchOn = $map['SwitchOn'];
        }
        if (isset($map['SwitchType'])) {
            $model->switchType = $map['SwitchType'];
        }

        return $model;
    }
}
