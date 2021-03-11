<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDevicesResponseBody;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDevicesResponseBody\devices\directory;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDevicesResponseBody\devices\stats;
use AlibabaCloud\Tea\Model;

class devices extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $alarmMethod;

    /**
     * @var string
     */
    public $dsn;

    /**
     * @var int
     */
    public $port;

    /**
     * @var int
     */
    public $posInterval;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var string
     */
    public $password;

    /**
     * @var bool
     */
    public $autoPos;

    /**
     * @var string
     */
    public $params;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $channelSyncTime;

    /**
     * @var string
     */
    public $registeredTime;

    /**
     * @var stats
     */
    public $stats;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $vendor;

    /**
     * @var bool
     */
    public $autoStart;

    /**
     * @var string
     */
    public $gbId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $longitude;

    /**
     * @var string
     */
    public $latitude;

    /**
     * @var directory
     */
    public $directory;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'type'            => 'Type',
        'status'          => 'Status',
        'alarmMethod'     => 'AlarmMethod',
        'dsn'             => 'Dsn',
        'port'            => 'Port',
        'posInterval'     => 'PosInterval',
        'parentId'        => 'ParentId',
        'password'        => 'Password',
        'autoPos'         => 'AutoPos',
        'params'          => 'Params',
        'description'     => 'Description',
        'enabled'         => 'Enabled',
        'name'            => 'Name',
        'directoryId'     => 'DirectoryId',
        'createdTime'     => 'CreatedTime',
        'channelSyncTime' => 'ChannelSyncTime',
        'registeredTime'  => 'RegisteredTime',
        'stats'           => 'Stats',
        'protocol'        => 'Protocol',
        'url'             => 'Url',
        'ip'              => 'Ip',
        'vendor'          => 'Vendor',
        'autoStart'       => 'AutoStart',
        'gbId'            => 'GbId',
        'groupId'         => 'GroupId',
        'longitude'       => 'Longitude',
        'latitude'        => 'Latitude',
        'directory'       => 'Directory',
        'id'              => 'Id',
        'username'        => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->alarmMethod) {
            $res['AlarmMethod'] = $this->alarmMethod;
        }
        if (null !== $this->dsn) {
            $res['Dsn'] = $this->dsn;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->posInterval) {
            $res['PosInterval'] = $this->posInterval;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->autoPos) {
            $res['AutoPos'] = $this->autoPos;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->channelSyncTime) {
            $res['ChannelSyncTime'] = $this->channelSyncTime;
        }
        if (null !== $this->registeredTime) {
            $res['RegisteredTime'] = $this->registeredTime;
        }
        if (null !== $this->stats) {
            $res['Stats'] = null !== $this->stats ? $this->stats->toMap() : null;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }
        if (null !== $this->autoStart) {
            $res['AutoStart'] = $this->autoStart;
        }
        if (null !== $this->gbId) {
            $res['GbId'] = $this->gbId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->directory) {
            $res['Directory'] = null !== $this->directory ? $this->directory->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return devices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['AlarmMethod'])) {
            $model->alarmMethod = $map['AlarmMethod'];
        }
        if (isset($map['Dsn'])) {
            $model->dsn = $map['Dsn'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['PosInterval'])) {
            $model->posInterval = $map['PosInterval'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['AutoPos'])) {
            $model->autoPos = $map['AutoPos'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['ChannelSyncTime'])) {
            $model->channelSyncTime = $map['ChannelSyncTime'];
        }
        if (isset($map['RegisteredTime'])) {
            $model->registeredTime = $map['RegisteredTime'];
        }
        if (isset($map['Stats'])) {
            $model->stats = stats::fromMap($map['Stats']);
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }
        if (isset($map['AutoStart'])) {
            $model->autoStart = $map['AutoStart'];
        }
        if (isset($map['GbId'])) {
            $model->gbId = $map['GbId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['Directory'])) {
            $model->directory = directory::fromMap($map['Directory']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
