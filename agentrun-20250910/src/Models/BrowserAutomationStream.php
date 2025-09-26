<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class BrowserAutomationStream extends Model
{
    /**
     * @var string
     */
    public $streamEndpoint;

    /**
     * @var string
     */
    public $streamStatus;
    protected $_name = [
        'streamEndpoint' => 'streamEndpoint',
        'streamStatus' => 'streamStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->streamEndpoint) {
            $res['streamEndpoint'] = $this->streamEndpoint;
        }

        if (null !== $this->streamStatus) {
            $res['streamStatus'] = $this->streamStatus;
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
        if (isset($map['streamEndpoint'])) {
            $model->streamEndpoint = $map['streamEndpoint'];
        }

        if (isset($map['streamStatus'])) {
            $model->streamStatus = $map['streamStatus'];
        }

        return $model;
    }
}
