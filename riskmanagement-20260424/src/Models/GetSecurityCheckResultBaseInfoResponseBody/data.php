<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetSecurityCheckResultBaseInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $configCompleted;

    /**
     * @var int
     */
    public $pendingSecurityAlertCount;

    /**
     * @var int
     */
    public $pendingVulnerabilityCount;

    /**
     * @var string
     */
    public $progress;
    protected $_name = [
        'configCompleted' => 'ConfigCompleted',
        'pendingSecurityAlertCount' => 'PendingSecurityAlertCount',
        'pendingVulnerabilityCount' => 'PendingVulnerabilityCount',
        'progress' => 'Progress',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configCompleted) {
            $res['ConfigCompleted'] = $this->configCompleted;
        }

        if (null !== $this->pendingSecurityAlertCount) {
            $res['PendingSecurityAlertCount'] = $this->pendingSecurityAlertCount;
        }

        if (null !== $this->pendingVulnerabilityCount) {
            $res['PendingVulnerabilityCount'] = $this->pendingVulnerabilityCount;
        }

        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
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
        if (isset($map['ConfigCompleted'])) {
            $model->configCompleted = $map['ConfigCompleted'];
        }

        if (isset($map['PendingSecurityAlertCount'])) {
            $model->pendingSecurityAlertCount = $map['PendingSecurityAlertCount'];
        }

        if (isset($map['PendingVulnerabilityCount'])) {
            $model->pendingVulnerabilityCount = $map['PendingVulnerabilityCount'];
        }

        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        return $model;
    }
}
