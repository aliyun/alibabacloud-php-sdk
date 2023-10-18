<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnClientsResponseBody;

use AlibabaCloud\Tea\Model;

class clientInfoList extends Model
{
    /**
     * @description The SSL client certificate used by the client.
     *
     * >  If the client uses two-factor authentication to establish an SSL-VPN connection to Alibaba Cloud, the return value is the username of the client.
     * @example CN=vsc-gw8gkh6gtilf1whgc****
     *
     * @var string
     */
    public $commonName;

    /**
     * @description The timestamp that indicates when the client connected to Alibaba Cloud through an SSL-VPN connection. Unit: milliseconds.
     *
     * This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     * @example 1670985008000
     *
     * @var int
     */
    public $connectedTime;

    /**
     * @description The actual public IP address used by the client when the client established an SSL-VPN connection to Alibaba Cloud.
     *
     * @example 8.XX.XX.15
     *
     * @var string
     */
    public $ip;

    /**
     * @description The port used by the client when the client established an SSL-VPN connection to Alibaba Cloud.
     *
     * @example 4****
     *
     * @var string
     */
    public $port;

    /**
     * @description The private IP address allocated to the client by the VPN gateway when the client established an SSL-VPN connection to Alibaba Cloud.
     *
     * @example 10.10.10.10
     *
     * @var string
     */
    public $privateIp;

    /**
     * @description The amount of data transferred from the client to the VPN gateway through the SSL-VPN connection. Unit: bytes.
     *
     * @example 60782
     *
     * @var int
     */
    public $receiveBytes;

    /**
     * @description The amount of data transferred from the VPN gateway to the client through the SSL-VPN connection. Unit: bytes.
     *
     * @example 57144
     *
     * @var int
     */
    public $sendBytes;

    /**
     * @description The status of the SSL-VPN connection.
     *
     * The value is set to **online**, which indicates that the client has connected to Alibaba Cloud through an SSL-VPN connection.
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
