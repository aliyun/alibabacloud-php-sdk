<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class NodeOperationParameters extends Model
{
    /**
     * @var NodeCordonParameters
     */
    public $cordonParameters;

    /**
     * @var NodeDrainParameters
     */
    public $drainParameters;

    /**
     * @var NodeUncordonParameters
     */
    public $uncordonParameters;
    protected $_name = [
        'cordonParameters' => 'CordonParameters',
        'drainParameters' => 'DrainParameters',
        'uncordonParameters' => 'UncordonParameters',
    ];

    public function validate()
    {
        if (null !== $this->cordonParameters) {
            $this->cordonParameters->validate();
        }
        if (null !== $this->drainParameters) {
            $this->drainParameters->validate();
        }
        if (null !== $this->uncordonParameters) {
            $this->uncordonParameters->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cordonParameters) {
            $res['CordonParameters'] = null !== $this->cordonParameters ? $this->cordonParameters->toArray($noStream) : $this->cordonParameters;
        }

        if (null !== $this->drainParameters) {
            $res['DrainParameters'] = null !== $this->drainParameters ? $this->drainParameters->toArray($noStream) : $this->drainParameters;
        }

        if (null !== $this->uncordonParameters) {
            $res['UncordonParameters'] = null !== $this->uncordonParameters ? $this->uncordonParameters->toArray($noStream) : $this->uncordonParameters;
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
        if (isset($map['CordonParameters'])) {
            $model->cordonParameters = NodeCordonParameters::fromMap($map['CordonParameters']);
        }

        if (isset($map['DrainParameters'])) {
            $model->drainParameters = NodeDrainParameters::fromMap($map['DrainParameters']);
        }

        if (isset($map['UncordonParameters'])) {
            $model->uncordonParameters = NodeUncordonParameters::fromMap($map['UncordonParameters']);
        }

        return $model;
    }
}
