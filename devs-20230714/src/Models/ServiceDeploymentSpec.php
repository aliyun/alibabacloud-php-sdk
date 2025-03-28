<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class ServiceDeploymentSpec extends Model
{
    /**
     * @var ServiceBaseline
     */
    public $baseline;

    /**
     * @var ServiceChanges
     */
    public $changes;

    /**
     * @var bool
     */
    public $skipRemoveResources;

    /**
     * @var ServiceBaseline
     */
    public $target;
    protected $_name = [
        'baseline' => 'baseline',
        'changes' => 'changes',
        'skipRemoveResources' => 'skipRemoveResources',
        'target' => 'target',
    ];

    public function validate()
    {
        if (null !== $this->baseline) {
            $this->baseline->validate();
        }
        if (null !== $this->changes) {
            $this->changes->validate();
        }
        if (null !== $this->target) {
            $this->target->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseline) {
            $res['baseline'] = null !== $this->baseline ? $this->baseline->toArray($noStream) : $this->baseline;
        }

        if (null !== $this->changes) {
            $res['changes'] = null !== $this->changes ? $this->changes->toArray($noStream) : $this->changes;
        }

        if (null !== $this->skipRemoveResources) {
            $res['skipRemoveResources'] = $this->skipRemoveResources;
        }

        if (null !== $this->target) {
            $res['target'] = null !== $this->target ? $this->target->toArray($noStream) : $this->target;
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
        if (isset($map['baseline'])) {
            $model->baseline = ServiceBaseline::fromMap($map['baseline']);
        }

        if (isset($map['changes'])) {
            $model->changes = ServiceChanges::fromMap($map['changes']);
        }

        if (isset($map['skipRemoveResources'])) {
            $model->skipRemoveResources = $map['skipRemoveResources'];
        }

        if (isset($map['target'])) {
            $model->target = ServiceBaseline::fromMap($map['target']);
        }

        return $model;
    }
}
