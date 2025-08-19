<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class EdgeClusterAddEdgeMachineRequest extends Model
{
    /**
     * @var int
     */
    public $expired;

    /**
     * @var string
     */
    public $nodepoolId;

    /**
     * @var string
     */
    public $options;
    protected $_name = [
        'expired' => 'expired',
        'nodepoolId' => 'nodepool_id',
        'options' => 'options',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
