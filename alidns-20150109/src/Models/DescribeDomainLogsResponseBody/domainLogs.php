<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainLogsResponseBody;

use AlibabaCloud\Tea\Model;

class domainLogs extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var int
     */
    public $actionTimestamp;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $actionTime;

    /**
     * @var string
     */
    public $domainName;
    protected $_name = [
        'action'          => 'Action',
        'actionTimestamp' => 'ActionTimestamp',
        'zoneId'          => 'ZoneId',
        'clientIp'        => 'ClientIp',
        'message'         => 'Message',
        'actionTime'      => 'ActionTime',
        'domainName'      => 'DomainName',
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
        if (null !== $this->actionTimestamp) {
            $res['ActionTimestamp'] = $this->actionTimestamp;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->actionTime) {
            $res['ActionTime'] = $this->actionTime;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainLogs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['ActionTimestamp'])) {
            $model->actionTimestamp = $map['ActionTimestamp'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ActionTime'])) {
            $model->actionTime = $map['ActionTime'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
