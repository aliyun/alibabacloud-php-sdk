<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class SetClusterInterceptionConfigRequest extends Model
{
    /**
     * @description The ID of the cluster. Separate multiple cluster IDs with commas (,).
     *
     * > You can call the [ListClusterInterceptionConfig](~~ListClusterInterceptionConfig~~) operation to query the IDs of clusters.
     * @example c60b77fe62093480db6164a3c2fa****
     *
     * @var string
     */
    public $clusterIds;

    /**
     * @description Specifies whether to turn on the switch. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $switchOn;

    /**
     * @description The type of the switch that you want to configure. Valid values:
     *
     *   **0**: the interception switch
     *   **1**: the interception type switch
     *   **2**: the interception history switch
     *
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
