<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\DeployCustomContainerInput\customContainerConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeployCustomContainerInput\customContainerConfig\instanceLifecycleConfig\initializer;
use AlibabaCloud\SDK\Devs\V20230714\Models\DeployCustomContainerInput\customContainerConfig\instanceLifecycleConfig\preStop;

class instanceLifecycleConfig extends Model
{
    /**
     * @var initializer
     */
    public $initializer;

    /**
     * @var preStop
     */
    public $preStop;
    protected $_name = [
        'initializer' => 'initializer',
        'preStop' => 'preStop',
    ];

    public function validate()
    {
        if (null !== $this->initializer) {
            $this->initializer->validate();
        }
        if (null !== $this->preStop) {
            $this->preStop->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->initializer) {
            $res['initializer'] = null !== $this->initializer ? $this->initializer->toArray($noStream) : $this->initializer;
        }

        if (null !== $this->preStop) {
            $res['preStop'] = null !== $this->preStop ? $this->preStop->toArray($noStream) : $this->preStop;
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
        if (isset($map['initializer'])) {
            $model->initializer = initializer::fromMap($map['initializer']);
        }

        if (isset($map['preStop'])) {
            $model->preStop = preStop::fromMap($map['preStop']);
        }

        return $model;
    }
}
