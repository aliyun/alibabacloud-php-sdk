<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksResponseBody\data\taskResultMessage;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksResponseBody\data\taskResultMessage\fullCheckResult\assetScan;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksResponseBody\data\taskResultMessage\fullCheckResult\healthCheck;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksResponseBody\data\taskResultMessage\fullCheckResult\mcpCheck;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksResponseBody\data\taskResultMessage\fullCheckResult\memoryCheck;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksResponseBody\data\taskResultMessage\fullCheckResult\sessionCheck;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksResponseBody\data\taskResultMessage\fullCheckResult\skillCheck;
use AlibabaCloud\SDK\AISC\V20260101\Models\ListSubTasksResponseBody\data\taskResultMessage\fullCheckResult\vulScan;

class fullCheckResult extends Model
{
    /**
     * @var assetScan
     */
    public $assetScan;

    /**
     * @var healthCheck
     */
    public $healthCheck;

    /**
     * @var mcpCheck
     */
    public $mcpCheck;

    /**
     * @var memoryCheck
     */
    public $memoryCheck;

    /**
     * @var sessionCheck
     */
    public $sessionCheck;

    /**
     * @var skillCheck
     */
    public $skillCheck;

    /**
     * @var vulScan
     */
    public $vulScan;
    protected $_name = [
        'assetScan' => 'AssetScan',
        'healthCheck' => 'HealthCheck',
        'mcpCheck' => 'McpCheck',
        'memoryCheck' => 'MemoryCheck',
        'sessionCheck' => 'SessionCheck',
        'skillCheck' => 'SkillCheck',
        'vulScan' => 'VulScan',
    ];

    public function validate()
    {
        if (null !== $this->assetScan) {
            $this->assetScan->validate();
        }
        if (null !== $this->healthCheck) {
            $this->healthCheck->validate();
        }
        if (null !== $this->mcpCheck) {
            $this->mcpCheck->validate();
        }
        if (null !== $this->memoryCheck) {
            $this->memoryCheck->validate();
        }
        if (null !== $this->sessionCheck) {
            $this->sessionCheck->validate();
        }
        if (null !== $this->skillCheck) {
            $this->skillCheck->validate();
        }
        if (null !== $this->vulScan) {
            $this->vulScan->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetScan) {
            $res['AssetScan'] = null !== $this->assetScan ? $this->assetScan->toArray($noStream) : $this->assetScan;
        }

        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = null !== $this->healthCheck ? $this->healthCheck->toArray($noStream) : $this->healthCheck;
        }

        if (null !== $this->mcpCheck) {
            $res['McpCheck'] = null !== $this->mcpCheck ? $this->mcpCheck->toArray($noStream) : $this->mcpCheck;
        }

        if (null !== $this->memoryCheck) {
            $res['MemoryCheck'] = null !== $this->memoryCheck ? $this->memoryCheck->toArray($noStream) : $this->memoryCheck;
        }

        if (null !== $this->sessionCheck) {
            $res['SessionCheck'] = null !== $this->sessionCheck ? $this->sessionCheck->toArray($noStream) : $this->sessionCheck;
        }

        if (null !== $this->skillCheck) {
            $res['SkillCheck'] = null !== $this->skillCheck ? $this->skillCheck->toArray($noStream) : $this->skillCheck;
        }

        if (null !== $this->vulScan) {
            $res['VulScan'] = null !== $this->vulScan ? $this->vulScan->toArray($noStream) : $this->vulScan;
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
        if (isset($map['AssetScan'])) {
            $model->assetScan = assetScan::fromMap($map['AssetScan']);
        }

        if (isset($map['HealthCheck'])) {
            $model->healthCheck = healthCheck::fromMap($map['HealthCheck']);
        }

        if (isset($map['McpCheck'])) {
            $model->mcpCheck = mcpCheck::fromMap($map['McpCheck']);
        }

        if (isset($map['MemoryCheck'])) {
            $model->memoryCheck = memoryCheck::fromMap($map['MemoryCheck']);
        }

        if (isset($map['SessionCheck'])) {
            $model->sessionCheck = sessionCheck::fromMap($map['SessionCheck']);
        }

        if (isset($map['SkillCheck'])) {
            $model->skillCheck = skillCheck::fromMap($map['SkillCheck']);
        }

        if (isset($map['VulScan'])) {
            $model->vulScan = vulScan::fromMap($map['VulScan']);
        }

        return $model;
    }
}
