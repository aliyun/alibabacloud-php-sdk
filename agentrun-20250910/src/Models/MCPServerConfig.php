<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class MCPServerConfig extends Model
{
    /**
     * @var string
     */
    public $serverUrl;

    /**
     * @var string
     */
    public $ssePath;

    /**
     * @var string
     */
    public $transportType;
    protected $_name = [
        'serverUrl' => 'serverUrl',
        'ssePath' => 'ssePath',
        'transportType' => 'transportType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serverUrl) {
            $res['serverUrl'] = $this->serverUrl;
        }

        if (null !== $this->ssePath) {
            $res['ssePath'] = $this->ssePath;
        }

        if (null !== $this->transportType) {
            $res['transportType'] = $this->transportType;
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
        if (isset($map['serverUrl'])) {
            $model->serverUrl = $map['serverUrl'];
        }

        if (isset($map['ssePath'])) {
            $model->ssePath = $map['ssePath'];
        }

        if (isset($map['transportType'])) {
            $model->transportType = $map['transportType'];
        }

        return $model;
    }
}
