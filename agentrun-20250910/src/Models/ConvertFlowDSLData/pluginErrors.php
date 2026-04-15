<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models\ConvertFlowDSLData;

use AlibabaCloud\Dara\Model;

class pluginErrors extends Model
{
    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $providerName;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $toolName;
    protected $_name = [
        'nodeId' => 'nodeId',
        'providerName' => 'providerName',
        'reason' => 'reason',
        'toolName' => 'toolName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['nodeId'] = $this->nodeId;
        }

        if (null !== $this->providerName) {
            $res['providerName'] = $this->providerName;
        }

        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }

        if (null !== $this->toolName) {
            $res['toolName'] = $this->toolName;
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
        if (isset($map['nodeId'])) {
            $model->nodeId = $map['nodeId'];
        }

        if (isset($map['providerName'])) {
            $model->providerName = $map['providerName'];
        }

        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }

        if (isset($map['toolName'])) {
            $model->toolName = $map['toolName'];
        }

        return $model;
    }
}
