<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Viap_1_0\Models\PushNotificationsRequest;

use AlibabaCloud\Tea\Model;

class tenantInfo extends Model
{
    /**
     * @description 猫精应用id，【开发者平台-技能应用】创建应用后得到的应用id。
     *
     * @var string
     */
    public $genieAppId;
    protected $_name = [
        'genieAppId' => 'GenieAppId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->genieAppId) {
            $res['GenieAppId'] = $this->genieAppId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tenantInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GenieAppId'])) {
            $model->genieAppId = $map['GenieAppId'];
        }

        return $model;
    }
}
