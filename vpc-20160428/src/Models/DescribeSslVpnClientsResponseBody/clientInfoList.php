<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnClientsResponseBody;

use AlibabaCloud\Tea\Model;

class clientInfoList extends Model
{
    /**
     * @example CN=vsc-gw8gkh6gtilf1whgc****
     *
     * @var string
     */
    public $commonName;

    /**
     * @example 1670985008000
     *
     * @var int
     */
    public $connectedTime;

    /**
     * @example 8.XX.XX.15
     *
     * @var string
     */
    public $ip;

    /**
     * @example 4****
     *
     * @var string
     */
    public $port;

    /**
     * @example 10.10.10.10
     *
     * @var string
     */
    public $privateIp;

    /**
     * @example 60782
     *
     * @var int
     */
    public $receiveBytes;

    /**
     * @example 57144
     *
     * @var int
     */
    public $sendBytes;

    /**
     * @example online
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return clientInfoList
     */
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
