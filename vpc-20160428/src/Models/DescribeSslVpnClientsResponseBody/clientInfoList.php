<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnClientsResponseBody;

use AlibabaCloud\Dara\Model;

class clientInfoList extends Model
{
    /**
     * @var string
     */
    public $commonName;
    /**
     * @var int
     */
    public $connectedTime;
    /**
     * @var string
     */
    public $ip;
    /**
     * @var string
     */
    public $port;
    /**
     * @var string
     */
    public $privateIp;
    /**
     * @var int
     */
    public $receiveBytes;
    /**
     * @var int
     */
    public $sendBytes;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'commonName'    => 'CommonName',
        'connectedTime' => 'ConnectedTime',
        'ip'            => 'Ip',
        'port'          => 'Port',
        'privateIp'     => 'PrivateIp',
        'receiveBytes'  => 'ReceiveBytes',
        'sendBytes'     => 'SendBytes',
        'status'        => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commonName) {
            $res['CommonName'] = $this->commonName;
        }

        if (null !== $this->connectedTime) {
            $res['ConnectedTime'] = $this->connectedTime;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->privateIp) {
            $res['PrivateIp'] = $this->privateIp;
        }

        if (null !== $this->receiveBytes) {
            $res['ReceiveBytes'] = $this->receiveBytes;
        }

        if (null !== $this->sendBytes) {
            $res['SendBytes'] = $this->sendBytes;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CommonName'])) {
            $model->commonName = $map['CommonName'];
        }

        if (isset($map['ConnectedTime'])) {
            $model->connectedTime = $map['ConnectedTime'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['PrivateIp'])) {
            $model->privateIp = $map['PrivateIp'];
        }

        if (isset($map['ReceiveBytes'])) {
            $model->receiveBytes = $map['ReceiveBytes'];
        }

        if (isset($map['SendBytes'])) {
            $model->sendBytes = $map['SendBytes'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
