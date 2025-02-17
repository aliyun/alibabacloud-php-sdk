<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantSettingsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantSettingsResponseBody\agentUpgradeConfig\allowedUpgradeWindows;

class agentUpgradeConfig extends Model
{
    /**
     * @var allowedUpgradeWindows
     */
    public $allowedUpgradeWindows;
    /**
     * @var bool
     */
    public $enabled;
    /**
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'allowedUpgradeWindows' => 'AllowedUpgradeWindows',
        'enabled'               => 'Enabled',
        'timeZone'              => 'TimeZone',
    ];

    public function validate()
    {
        if (null !== $this->allowedUpgradeWindows) {
            $this->allowedUpgradeWindows->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedUpgradeWindows) {
            $res['AllowedUpgradeWindows'] = null !== $this->allowedUpgradeWindows ? $this->allowedUpgradeWindows->toArray($noStream) : $this->allowedUpgradeWindows;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
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
        if (isset($map['AllowedUpgradeWindows'])) {
            $model->allowedUpgradeWindows = allowedUpgradeWindows::fromMap($map['AllowedUpgradeWindows']);
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        return $model;
    }
}
