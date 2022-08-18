<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainLogsResponseBody\domainLogs;

use AlibabaCloud\Tea\Model;

class domainLog extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $actionTime;

    /**
     * @var int
     */
    public $actionTimestamp;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $message;

    /**
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
