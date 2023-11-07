<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models\GetAccessKeyLastUsedIpsResponseBody;

use AlibabaCloud\Tea\Model;

class ips extends Model
{
    /**
     * @description An array that consists of the details about the event.
     *
     * @example {
     * "eventId": "239EB588-CD24-522E-B0B5-174A1A58****",
     * "eventSource": "ecs.cn-hangzhou.aliyuncs.com",
     * "sourceIpAddress": "10.10.**.**",
     * "userIdentity": {
     * "accountId": "104758519118****",
     * "principalId": "24549429003625****",
     * }
     * @var string
     */
    public $detail;

    /**
     * @description The IP address.
     *
     * @example 10.10.**.**
     *
     * @var string
     */
    public $ip;

    /**
     * @description The event source.
     *
     * @example ManagementEvent
     *
     * @var string
     */
    public $source;

    /**
     * @description The timestamp when the IP address was used.
     *
     * @example 1657247532000
     *
     * @var int
     */
    public $usedTimestamp;
    protected $_name = [
        'detail'        => 'Detail',
        'ip'            => 'Ip',
        'source'        => 'Source',
        'usedTimestamp' => 'UsedTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->usedTimestamp) {
            $res['UsedTimestamp'] = $this->usedTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ips
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['UsedTimestamp'])) {
            $model->usedTimestamp = $map['UsedTimestamp'];
        }

        return $model;
    }
}
