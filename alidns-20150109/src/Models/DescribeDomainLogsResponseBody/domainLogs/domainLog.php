<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainLogsResponseBody\domainLogs;

use AlibabaCloud\Tea\Model;

class domainLog extends Model
{
    /**
     * @description The operation performed.
     *
     * @example Add
     *
     * @var string
     */
    public $action;

    /**
     * @description The time when the operation was performed.
     *
     * @example 2015-12-12T09:23Z
     *
     * @var string
     */
    public $actionTime;

    /**
     * @description The UNIX timestamp that indicates when the operation was performed.
     *
     * @example 143562300000
     *
     * @var int
     */
    public $actionTimestamp;

    /**
     * @description The IP address from which the operation was performed.
     *
     * @example 182.92.253.20
     *
     * @var string
     */
    public $clientIp;

    /**
     * @description The domain name.
     *
     * @example abc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The message for the operation.
     *
     * @example To the DNS record list
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the zone.
     *
     * @example cxfd345sd234
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'action'          => 'Action',
        'actionTime'      => 'ActionTime',
        'actionTimestamp' => 'ActionTimestamp',
        'clientIp'        => 'ClientIp',
        'domainName'      => 'DomainName',
        'message'         => 'Message',
        'zoneId'          => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->actionTime) {
            $res['ActionTime'] = $this->actionTime;
        }
        if (null !== $this->actionTimestamp) {
            $res['ActionTimestamp'] = $this->actionTimestamp;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['ActionTime'])) {
            $model->actionTime = $map['ActionTime'];
        }
        if (isset($map['ActionTimestamp'])) {
            $model->actionTimestamp = $map['ActionTimestamp'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
