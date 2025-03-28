<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class OperationModelFileAction extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $destination;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $target;
    protected $_name = [
        'action' => 'action',
        'destination' => 'destination',
        'source' => 'source',
        'target' => 'target',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }

        if (null !== $this->destination) {
            $res['destination'] = $this->destination;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->target) {
            $res['target'] = $this->target;
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
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }

        if (isset($map['destination'])) {
            $model->destination = $map['destination'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['target'])) {
            $model->target = $map['target'];
        }

        return $model;
    }
}
