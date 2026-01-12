<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class StartupDependency extends Model
{
    /**
     * @var string
     */
    public $minReplicas;

    /**
     * @var string
     */
    public $onPhase;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'minReplicas' => 'MinReplicas',
        'onPhase' => 'OnPhase',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->minReplicas) {
            $res['MinReplicas'] = $this->minReplicas;
        }

        if (null !== $this->onPhase) {
            $res['OnPhase'] = $this->onPhase;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['MinReplicas'])) {
            $model->minReplicas = $map['MinReplicas'];
        }

        if (isset($map['OnPhase'])) {
            $model->onPhase = $map['OnPhase'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
