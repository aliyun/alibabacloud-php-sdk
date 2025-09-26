<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class BrowserLiveViewStream extends Model
{
    /**
     * @var string
     */
    public $streamEndpoint;
    protected $_name = [
        'streamEndpoint' => 'streamEndpoint',
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

        return $model;
    }
}
