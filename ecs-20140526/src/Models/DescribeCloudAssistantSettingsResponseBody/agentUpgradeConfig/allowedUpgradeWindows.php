<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeCloudAssistantSettingsResponseBody\agentUpgradeConfig;

use AlibabaCloud\Tea\Model;

class allowedUpgradeWindows extends Model
{
    /**
     * @var string[]
     */
    public $allowedUpgradeWindow;
    protected $_name = [
        'allowedUpgradeWindow' => 'AllowedUpgradeWindow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowedUpgradeWindow) {
            $res['AllowedUpgradeWindow'] = $this->allowedUpgradeWindow;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return allowedUpgradeWindows
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowedUpgradeWindow'])) {
            if (!empty($map['AllowedUpgradeWindow'])) {
                $model->allowedUpgradeWindow = $map['AllowedUpgradeWindow'];
            }
        }

        return $model;
    }
}
