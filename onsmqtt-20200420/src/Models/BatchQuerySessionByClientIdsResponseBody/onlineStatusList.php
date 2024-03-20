<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\BatchQuerySessionByClientIdsResponseBody;

use AlibabaCloud\Tea\Model;

class onlineStatusList extends Model
{
    /**
     * @description The ID of the ApsaraMQ for MQTT client. For more information about client IDs, see [Terms](~~42420~~).
     *
     * @example GID_test@0001
     *
     * @var string
     */
    public $clientId;

    /**
     * @description Indicates whether the ApsaraMQ for MQTT client is online. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $onlineStatus;
    protected $_name = [
        'clientId'     => 'ClientId',
        'onlineStatus' => 'OnlineStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->onlineStatus) {
            $res['OnlineStatus'] = $this->onlineStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return onlineStatusList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['OnlineStatus'])) {
            $model->onlineStatus = $map['OnlineStatus'];
        }

        return $model;
    }
}
