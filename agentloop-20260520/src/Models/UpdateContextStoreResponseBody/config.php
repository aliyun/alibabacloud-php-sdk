<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\UpdateContextStoreResponseBody;

use AlibabaCloud\Dara\Model;

class config extends Model
{
    /**
     * @var bool
     */
    public $runtimeRecallEnabled;

    /**
     * @var int
     */
    public $runtimeRecallRevision;
    protected $_name = [
        'runtimeRecallEnabled' => 'runtimeRecallEnabled',
        'runtimeRecallRevision' => 'runtimeRecallRevision',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->runtimeRecallEnabled) {
            $res['runtimeRecallEnabled'] = $this->runtimeRecallEnabled;
        }

        if (null !== $this->runtimeRecallRevision) {
            $res['runtimeRecallRevision'] = $this->runtimeRecallRevision;
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
        if (isset($map['runtimeRecallEnabled'])) {
            $model->runtimeRecallEnabled = $map['runtimeRecallEnabled'];
        }

        if (isset($map['runtimeRecallRevision'])) {
            $model->runtimeRecallRevision = $map['runtimeRecallRevision'];
        }

        return $model;
    }
}
