<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyCloudAssistantSettingsRequest;

use AlibabaCloud\Dara\Model;

class sessionManagerConfig extends Model
{
    /**
     * @var bool
     */
    public $sessionManagerEnabled;
    protected $_name = [
        'sessionManagerEnabled' => 'SessionManagerEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sessionManagerEnabled) {
            $res['SessionManagerEnabled'] = $this->sessionManagerEnabled;
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
        if (isset($map['SessionManagerEnabled'])) {
            $model->sessionManagerEnabled = $map['SessionManagerEnabled'];
        }

        return $model;
    }
}
