<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class EdgeClusterAddEdgeMachineRequest extends Model
{
    /**
     * @description expired
     *
     * @var int
     */
    public $expired;

    /**
     * @description nodepool_id
     *
     * @var string
     */
    public $nodepoolId;

    /**
     * @description options
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
