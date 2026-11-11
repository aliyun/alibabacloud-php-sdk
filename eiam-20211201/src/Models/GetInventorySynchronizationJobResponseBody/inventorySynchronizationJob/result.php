<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetInventorySynchronizationJobResponseBody\inventorySynchronizationJob;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInventorySynchronizationJobResponseBody\inventorySynchronizationJob\result\agentStatistics;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInventorySynchronizationJobResponseBody\inventorySynchronizationJob\result\assetStatistics;

class result extends Model
{
    /**
     * @var agentStatistics
     */
    public $agentStatistics;

    /**
     * @var assetStatistics
     */
    public $assetStatistics;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;
    protected $_name = [
        'agentStatistics' => 'AgentStatistics',
        'assetStatistics' => 'AssetStatistics',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
    ];

    public function validate()
    {
        if (null !== $this->agentStatistics) {
            $this->agentStatistics->validate();
        }
        if (null !== $this->assetStatistics) {
            $this->assetStatistics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentStatistics) {
            $res['AgentStatistics'] = null !== $this->agentStatistics ? $this->agentStatistics->toArray($noStream) : $this->agentStatistics;
        }

        if (null !== $this->assetStatistics) {
            $res['AssetStatistics'] = null !== $this->assetStatistics ? $this->assetStatistics->toArray($noStream) : $this->assetStatistics;
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
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
        if (isset($map['AgentStatistics'])) {
            $model->agentStatistics = agentStatistics::fromMap($map['AgentStatistics']);
        }

        if (isset($map['AssetStatistics'])) {
            $model->assetStatistics = assetStatistics::fromMap($map['AssetStatistics']);
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        return $model;
    }
}
