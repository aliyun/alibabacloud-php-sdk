<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models\LookupEventsRequest;

use AlibabaCloud\Tea\Model;

class lookupAttribute extends Model
{
    /**
     * @description The key of the query condition. Valid values:
     *
     *  ServiceName: the name of a specific Alibaba Cloud service.
     *  EventName: the name of a specific event.
     *  User: the name of the RAM user who calls a specific operation.
     *  EventId: the ID of a specific event.
     *  ResourceType: the type of resources.
     *   ResourceName: the name of a specific resource.
     *   EventRW: the read/write type of events.
     *  EventAccessKeyId: the AccessKey ID used in events.
     *
     * > You can use only one query condition for each query.
     * @example ServiceName
     *
     * @var string
     */
    public $key;

    /**
     * @description The value of the query condition. Valid values:
     *
     *   When the LookupAttribute.N.Key parameter is set to ServiceName, you can set this parameter to a value such as `Ecs`.
     *   When the LookupAttribute.N.Key parameter is set to EventName, you can set this parameter to a value such as `ConsoleSignin`.
     *   When the LookupAttribute.N.Key parameter is set to User, you can set this parameter to a value such as `Alice`.
     *   When the LookupAttribute.N.Key parameter is set to EventId, you can set this parameter to a value such as `B702AFA3-FD4B-40E3-88E4-C0752FAA****`.
     *   When the LookupAttribute.N.Key parameter is set to ResourceType, you can set this parameter to a value such as `ACS::ECS::Instance`.
     *   When the LookupAttribute.N.Key parameter is set to ResourceName, you can set this parameter to a value such as `i-bp14664y88udkt45****`.
     *   When the LookupAttribute.N.Key parameter is set to EventRW, you can set this parameter to `Read` or `Write`.
     *   When the LookupAttribute.N.Key parameter is set to EventAccessKeyId, you can set this parameter to a value such as `LTAI4FoDkCf4DU1bic1V****`.
     *
     * @example Ecs
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lookupAttribute
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
