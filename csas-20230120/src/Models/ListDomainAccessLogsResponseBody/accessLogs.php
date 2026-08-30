<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListDomainAccessLogsResponseBody;

use AlibabaCloud\Dara\Model;

class accessLogs extends Model
{
    /**
     * @var string
     */
    public $blockAction;

    /**
     * @var string
     */
    public $department;

    /**
     * @var string
     */
    public $destAddress;

    /**
     * @var string
     */
    public $eventTime;

    /**
     * @var string
     */
    public $l4ProtocolType;

    /**
     * @var string
     */
    public $processName;

    /**
     * @var string
     */
    public $remoteAddress;

    /**
     * @var string
     */
    public $remoteHost;

    /**
     * @var string
     */
    public $remotePort;

    /**
     * @var string
     */
    public $srcAddress;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'blockAction' => 'BlockAction',
        'department' => 'Department',
        'destAddress' => 'DestAddress',
        'eventTime' => 'EventTime',
        'l4ProtocolType' => 'L4ProtocolType',
        'processName' => 'ProcessName',
        'remoteAddress' => 'RemoteAddress',
        'remoteHost' => 'RemoteHost',
        'remotePort' => 'RemotePort',
        'srcAddress' => 'SrcAddress',
        'username' => 'Username',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockAction) {
            $res['BlockAction'] = $this->blockAction;
        }

        if (null !== $this->department) {
            $res['Department'] = $this->department;
        }

        if (null !== $this->destAddress) {
            $res['DestAddress'] = $this->destAddress;
        }

        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }

        if (null !== $this->l4ProtocolType) {
            $res['L4ProtocolType'] = $this->l4ProtocolType;
        }

        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }

        if (null !== $this->remoteAddress) {
            $res['RemoteAddress'] = $this->remoteAddress;
        }

        if (null !== $this->remoteHost) {
            $res['RemoteHost'] = $this->remoteHost;
        }

        if (null !== $this->remotePort) {
            $res['RemotePort'] = $this->remotePort;
        }

        if (null !== $this->srcAddress) {
            $res['SrcAddress'] = $this->srcAddress;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
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
        if (isset($map['BlockAction'])) {
            $model->blockAction = $map['BlockAction'];
        }

        if (isset($map['Department'])) {
            $model->department = $map['Department'];
        }

        if (isset($map['DestAddress'])) {
            $model->destAddress = $map['DestAddress'];
        }

        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }

        if (isset($map['L4ProtocolType'])) {
            $model->l4ProtocolType = $map['L4ProtocolType'];
        }

        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }

        if (isset($map['RemoteAddress'])) {
            $model->remoteAddress = $map['RemoteAddress'];
        }

        if (isset($map['RemoteHost'])) {
            $model->remoteHost = $map['RemoteHost'];
        }

        if (isset($map['RemotePort'])) {
            $model->remotePort = $map['RemotePort'];
        }

        if (isset($map['SrcAddress'])) {
            $model->srcAddress = $map['SrcAddress'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
