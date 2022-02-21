<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribeParentPlatformResponseBody extends Model
{
    /**
     * @var bool
     */
    public $autoStart;

    /**
     * @var bool
     */
    public $clientAuth;

    /**
     * @var string
     */
    public $clientGbId;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $clientPassword;

    /**
     * @var int
     */
    public $clientPort;

    /**
     * @var string
     */
    public $clientUsername;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gbId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'autoStart'      => 'AutoStart',
        'clientAuth'     => 'ClientAuth',
        'clientGbId'     => 'ClientGbId',
        'clientIp'       => 'ClientIp',
        'clientPassword' => 'ClientPassword',
        'clientPort'     => 'ClientPort',
        'clientUsername' => 'ClientUsername',
        'createdTime'    => 'CreatedTime',
        'description'    => 'Description',
        'gbId'           => 'GbId',
        'id'             => 'Id',
        'ip'             => 'Ip',
        'name'           => 'Name',
        'port'           => 'Port',
        'protocol'       => 'Protocol',
        'requestId'      => 'RequestId',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoStart) {
            $res['AutoStart'] = $this->autoStart;
        }
        if (null !== $this->clientAuth) {
            $res['ClientAuth'] = $this->clientAuth;
        }
        if (null !== $this->clientGbId) {
            $res['ClientGbId'] = $this->clientGbId;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->clientPassword) {
            $res['ClientPassword'] = $this->clientPassword;
        }
        if (null !== $this->clientPort) {
            $res['ClientPort'] = $this->clientPort;
        }
        if (null !== $this->clientUsername) {
            $res['ClientUsername'] = $this->clientUsername;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gbId) {
            $res['GbId'] = $this->gbId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeParentPlatformResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoStart'])) {
            $model->autoStart = $map['AutoStart'];
        }
        if (isset($map['ClientAuth'])) {
            $model->clientAuth = $map['ClientAuth'];
        }
        if (isset($map['ClientGbId'])) {
            $model->clientGbId = $map['ClientGbId'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['ClientPassword'])) {
            $model->clientPassword = $map['ClientPassword'];
        }
        if (isset($map['ClientPort'])) {
            $model->clientPort = $map['ClientPort'];
        }
        if (isset($map['ClientUsername'])) {
            $model->clientUsername = $map['ClientUsername'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GbId'])) {
            $model->gbId = $map['GbId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
