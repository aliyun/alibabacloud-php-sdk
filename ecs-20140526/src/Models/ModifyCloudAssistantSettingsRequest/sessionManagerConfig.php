<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyCloudAssistantSettingsRequest;

use AlibabaCloud\Tea\Model;

class sessionManagerConfig extends Model
{
    /**
     * @var bool
     */
    public $sessionManagerEnabled;
    protected $_name = [
        'sessionManagerEnabled' => 'SessionManagerEnabled',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->sessionManagerEnabled) {
            $res['SessionManagerEnabled'] = $this->sessionManagerEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sessionManagerConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SessionManagerEnabled'])) {
            $model->sessionManagerEnabled = $map['SessionManagerEnabled'];
        }

        return $model;
    }
}
