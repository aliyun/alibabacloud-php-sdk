<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class EdgeClusterAddEdgeMachineRequest extends Model
{
    /**
     * @description The timeout period of sessions. Unit: seconds.
     *
     * @example 1024
     *
     * @var int
     */
    public $expired;

    /**
     * @description The node pool ID.
     *
     * This parameter is required.
     * @example c26607f52179f4472a0d9723e7595****
     *
     * @var string
     */
    public $nodepoolId;

    /**
     * @description The options that you want to configure.
     *
     * @example "{\\"enableIptables\\":true,\\"quiet\\":true,\\"manageRuntime\\":true,\\"allowedClusterAddons\\":[\\"kube-proxy\\",\\"flannel\\",\\"coredns\\"]}"
     *
     * @var string
     */
    public $options;
    protected $_name = [
        'expired'    => 'expired',
        'nodepoolId' => 'nodepool_id',
        'options'    => 'options',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expired) {
            $res['expired'] = $this->expired;
        }
        if (null !== $this->nodepoolId) {
            $res['nodepool_id'] = $this->nodepoolId;
        }
        if (null !== $this->options) {
            $res['options'] = $this->options;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EdgeClusterAddEdgeMachineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['expired'])) {
            $model->expired = $map['expired'];
        }
        if (isset($map['nodepool_id'])) {
            $model->nodepoolId = $map['nodepool_id'];
        }
        if (isset($map['options'])) {
            $model->options = $map['options'];
        }

        return $model;
    }
}
