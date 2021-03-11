<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDeviceResponseBody\directory;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDeviceResponseBody\stats;
use AlibabaCloud\Tea\Model;

class DescribeDeviceResponseBody extends Model
{
    /**
     * @var string
     */
    public $alarmMethod;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $channelSyncTime;

    /**
     * @var string
     */
    public $latitude;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $gbId;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var bool
     */
    public $autoStart;

    /**
     * @var string
     */
    public $dsn;

    /**
     * @var string
     */
    public $password;

    /**
     * @var directory
     */
    public $directory;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $params;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $vendor;

    /**
     * @var string
     */
    public $registeredTime;

    /**
     * @var string
     */
    public $longitude;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $posInterval;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $username;

    /**
     * @var bool
     */
    public $autoPos;

    /**
     * @var stats
     */
    public $stats;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'alarmMethod'     => 'AlarmMethod',
        'description'     => 'Description',
        'createdTime'     => 'CreatedTime',
        'port'            => 'Port',
        'ip'              => 'Ip',
        'channelSyncTime' => 'ChannelSyncTime',
        'latitude'        => 'Latitude',
        'url'             => 'Url',
        'name'            => 'Name',
        'gbId'            => 'GbId',
        'protocol'        => 'Protocol',
        'autoStart'       => 'AutoStart',
        'dsn'             => 'Dsn',
        'password'        => 'Password',
        'directory'       => 'Directory',
        'status'          => 'Status',
        'parentId'        => 'ParentId',
        'requestId'       => 'RequestId',
        'params'          => 'Params',
        'enabled'         => 'Enabled',
        'vendor'          => 'Vendor',
        'registeredTime'  => 'RegisteredTime',
        'longitude'       => 'Longitude',
        'groupId'         => 'GroupId',
        'posInterval'     => 'PosInterval',
        'type'            => 'Type',
        'directoryId'     => 'DirectoryId',
        'username'        => 'Username',
        'autoPos'         => 'AutoPos',
        'stats'           => 'Stats',
        'id'              => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alarmMethod) {
            $res['AlarmMethod'] = $this->alarmMethod;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->channelSyncTime) {
            $res['ChannelSyncTime'] = $this->channelSyncTime;
        }
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->gbId) {
            $res['GbId'] = $this->gbId;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->autoStart) {
            $res['AutoStart'] = $this->autoStart;
        }
        if (null !== $this->dsn) {
            $res['Dsn'] = $this->dsn;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->directory) {
            $res['Directory'] = null !== $this->directory ? $this->directory->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }
        if (null !== $this->registeredTime) {
            $res['RegisteredTime'] = $this->registeredTime;
        }
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->posInterval) {
            $res['PosInterval'] = $this->posInterval;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->autoPos) {
            $res['AutoPos'] = $this->autoPos;
        }
        if (null !== $this->stats) {
            $res['Stats'] = null !== $this->stats ? $this->stats->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDeviceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlarmMethod'])) {
            $model->alarmMethod = $map['AlarmMethod'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['ChannelSyncTime'])) {
            $model->channelSyncTime = $map['ChannelSyncTime'];
        }
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['GbId'])) {
            $model->gbId = $map['GbId'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['AutoStart'])) {
            $model->autoStart = $map['AutoStart'];
        }
        if (isset($map['Dsn'])) {
            $model->dsn = $map['Dsn'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Directory'])) {
            $model->directory = directory::fromMap($map['Directory']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }
        if (isset($map['RegisteredTime'])) {
            $model->registeredTime = $map['RegisteredTime'];
        }
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['PosInterval'])) {
            $model->posInterval = $map['PosInterval'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['AutoPos'])) {
            $model->autoPos = $map['AutoPos'];
        }
        if (isset($map['Stats'])) {
            $model->stats = stats::fromMap($map['Stats']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
