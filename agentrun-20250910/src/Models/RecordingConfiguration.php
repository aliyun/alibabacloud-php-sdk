<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class RecordingConfiguration extends Model
{
    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var OssConfiguration
     */
    public $ossLocation;
    protected $_name = [
        'enabled' => 'enabled',
        'ossLocation' => 'ossLocation',
    ];

    public function validate()
    {
        if (null !== $this->ossLocation) {
            $this->ossLocation->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->ossLocation) {
            $res['ossLocation'] = null !== $this->ossLocation ? $this->ossLocation->toArray($noStream) : $this->ossLocation;
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
        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['ossLocation'])) {
            $model->ossLocation = OssConfiguration::fromMap($map['ossLocation']);
        }

        return $model;
    }
}
