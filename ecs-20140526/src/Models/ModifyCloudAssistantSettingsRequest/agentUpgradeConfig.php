<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyCloudAssistantSettingsRequest;

use AlibabaCloud\Dara\Model;

class agentUpgradeConfig extends Model
{
    /**
     * @var string[]
     */
    public $allowedUpgradeWindow;
    /**
     * @var bool
     */
    public $enabled;
    /**
     * @var string
     */
    public $timeZone;
    protected $_name = [
        'allowedUpgradeWindow' => 'AllowedUpgradeWindow',
        'enabled'              => 'Enabled',
        'timeZone'             => 'TimeZone',
    ];

    public function validate()
    {
        if (\is_array($this->allowedUpgradeWindow)) {
            Model::validateArray($this->allowedUpgradeWindow);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowedUpgradeWindow) {
            if (\is_array($this->allowedUpgradeWindow)) {
                $res['AllowedUpgradeWindow'] = [];
                $n1                          = 0;
                foreach ($this->allowedUpgradeWindow as $item1) {
                    $res['AllowedUpgradeWindow'][$n1++] = $item1;
                }
            }
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
        if (isset($map['AllowedUpgradeWindow'])) {
            if (!empty($map['AllowedUpgradeWindow'])) {
                $model->allowedUpgradeWindow = [];
                $n1                          = 0;
                foreach ($map['AllowedUpgradeWindow'] as $item1) {
                    $model->allowedUpgradeWindow[$n1++] = $item1;
                }
            }
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
