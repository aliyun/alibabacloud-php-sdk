<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CheckSecurityEventIdRequest extends Model
{
    /**
     * @description The IDs of alert events. You can specify up to 100 IDs. If you do not specify this parameter, the value of the response parameter **Data** is **false**. The value false indicates that no alert events are generated on the server.
     *
     * >  You can call the [DescribeAlarmEventList](~~DescribeAlarmEventList~~) operation to query the IDs of alert events.
     * @example ["1234567","98765432"]
     *
     * @var string[]
     */
    public $securityEventIds;

    /**
     * @description The UUID of the server.
     *
     * >  You can call the [DescribeCloudCenterInstances](~~DescribeCloudCenterInstances~~) operation to query the UUIDs of servers.
     * @example 96ad2473-bc60-45ba-ad1c-932e2866****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'securityEventIds' => 'SecurityEventIds',
        'uuid'             => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityEventIds) {
            $res['SecurityEventIds'] = $this->securityEventIds;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckSecurityEventIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityEventIds'])) {
            if (!empty($map['SecurityEventIds'])) {
                $model->securityEventIds = $map['SecurityEventIds'];
            }
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
