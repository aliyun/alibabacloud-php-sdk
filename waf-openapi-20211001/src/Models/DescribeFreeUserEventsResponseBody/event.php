<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFreeUserEventsResponseBody;

use AlibabaCloud\Tea\Model;

class event extends Model
{
    /**
     * @description The API.
     *
     * @example /api/login
     *
     * @var string
     */
    public $apiFormat;

    /**
     * @description The attacker IP address.
     *
     * @example 104.234.140.**
     *
     * @var string
     */
    public $attackIP;

    /**
     * @description The time at which the attack was launched. The value is a UNIX timestamp displayed in UTC. Unit: seconds.
     *
     * @example 1683703260
     *
     * @var int
     */
    public $attackTime;

    /**
     * @description The domain name of the API.
     *
     * @example www.***.cn
     *
     * @var string
     */
    public $domain;

    /**
     * @description The severity level of the security event. Valid values:
     *
     *   **high**
     *   **medium**
     *   **low**
     *
     * @example high
     *
     * @var string
     */
    public $eventLevel;

    /**
     * @description The type of the security event.
     *
     * >  You can call the [DescribeApisecRules](https://help.aliyun.com/document_detail/2859155.html) operation to query the supported types of security events.
     *
     * @example Event_DataTraverse
     *
     * @var string
     */
    public $eventTag;
    protected $_name = [
        'apiFormat' => 'ApiFormat',
        'attackIP' => 'AttackIP',
        'attackTime' => 'AttackTime',
        'domain' => 'Domain',
        'eventLevel' => 'EventLevel',
        'eventTag' => 'EventTag',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiFormat) {
            $res['ApiFormat'] = $this->apiFormat;
        }
        if (null !== $this->attackIP) {
            $res['AttackIP'] = $this->attackIP;
        }
        if (null !== $this->attackTime) {
            $res['AttackTime'] = $this->attackTime;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->eventLevel) {
            $res['EventLevel'] = $this->eventLevel;
        }
        if (null !== $this->eventTag) {
            $res['EventTag'] = $this->eventTag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return event
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiFormat'])) {
            $model->apiFormat = $map['ApiFormat'];
        }
        if (isset($map['AttackIP'])) {
            $model->attackIP = $map['AttackIP'];
        }
        if (isset($map['AttackTime'])) {
            $model->attackTime = $map['AttackTime'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['EventLevel'])) {
            $model->eventLevel = $map['EventLevel'];
        }
        if (isset($map['EventTag'])) {
            $model->eventTag = $map['EventTag'];
        }

        return $model;
    }
}
