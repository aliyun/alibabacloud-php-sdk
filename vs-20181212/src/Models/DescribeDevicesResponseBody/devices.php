<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDevicesResponseBody;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDevicesResponseBody\devices\directory;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeDevicesResponseBody\devices\stats;
use AlibabaCloud\Tea\Model;

class devices extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $alarmMethod;

    /**
     * @example true
     *
     * @var bool
     */
    public $autoDirectory;

    /**
     * @example false
     *
     * @var bool
     */
    public $autoPos;

    /**
     * @example false
     *
     * @var bool
     */
    public $autoStart;

    /**
     * @example 2019-02-28T17:01:17Z
     *
     * @var string
     */
    public $channelSyncTime;

    /**
     * @example 2019-02-28T17:00:17Z
     *
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var directory
     */
    public $directory;

    /**
     * @example 399*****488-cn-qingdao
     *
     * @var string
     */
    public $directoryId;

    /**
     * @example 7D0*****4C0
     *
     * @var string
     */
    public $dsn;

    /**
     * @example true
     *
     * @var bool
     */
    public $enabled;

    /**
     * @example 310000000****0000002
     *
     * @var string
     */
    public $gbId;

    /**
     * @example 348*****174-cn-qingdao
     *
     * @var string
     */
    public $groupId;

    /**
     * @example 348*****380-cn-qingdao
     *
     * @var string
     */
    public $id;

    /**
     * @example 10.10.10.10
     *
     * @var string
     */
    public $ip;

    /**
     * @example 119.20
     *
     * @var string
     */
    public $latitude;

    /**
     * @example 45.00
     *
     * @var string
     */
    public $longitude;

    /**
     * @var string
     */
    public $name;

    /**
     * @example {}
     *
     * @var string
     */
    public $params;

    /**
     * @example 3238848****092995
     *
     * @var string
     */
    public $parentId;

    /**
     * @example admin
     *
     * @var string
     */
    public $password;

    /**
     * @example 8080
     *
     * @var int
     */
    public $port;

    /**
     * @example 300
     *
     * @var int
     */
    public $posInterval;

    /**
     * @example gb28181
     *
     * @var string
     */
    public $protocol;

    /**
     * @example 2019-02-28T17:00:17Z
     *
     * @var string
     */
    public $registeredTime;

    /**
     * @var stats
     */
    public $stats;

    /**
     * @example on
     *
     * @var string
     */
    public $status;

    /**
     * @example ipc
     *
     * @var string
     */
    public $type;

    /**
     * @example rtmp://xxx/xxx
     *
     * @var string
     */
    public $url;

    /**
     * @example admin
     *
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'alarmMethod'     => 'AlarmMethod',
        'autoDirectory'   => 'AutoDirectory',
        'autoPos'         => 'AutoPos',
        'autoStart'       => 'AutoStart',
        'channelSyncTime' => 'ChannelSyncTime',
        'createdTime'     => 'CreatedTime',
        'description'     => 'Description',
        'directory'       => 'Directory',
        'directoryId'     => 'DirectoryId',
        'dsn'             => 'Dsn',
        'enabled'         => 'Enabled',
        'gbId'            => 'GbId',
        'groupId'         => 'GroupId',
        'id'              => 'Id',
        'ip'              => 'Ip',
        'latitude'        => 'Latitude',
        'longitude'       => 'Longitude',
        'name'            => 'Name',
        'params'          => 'Params',
        'parentId'        => 'ParentId',
        'password'        => 'Password',
        'port'            => 'Port',
        'posInterval'     => 'PosInterval',
        'protocol'        => 'Protocol',
        'registeredTime'  => 'RegisteredTime',
        'stats'           => 'Stats',
        'status'          => 'Status',
        'type'            => 'Type',
        'url'             => 'Url',
        'username'        => 'Username',
        'vendor'          => 'Vendor',
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
        if (null !== $this->autoDirectory) {
            $res['AutoDirectory'] = $this->autoDirectory;
        }
        if (null !== $this->autoPos) {
            $res['AutoPos'] = $this->autoPos;
        }
        if (null !== $this->autoStart) {
            $res['AutoStart'] = $this->autoStart;
        }
        if (null !== $this->channelSyncTime) {
            $res['ChannelSyncTime'] = $this->channelSyncTime;
        }
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->directory) {
            $res['Directory'] = null !== $this->directory ? $this->directory->toMap() : null;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->dsn) {
            $res['Dsn'] = $this->dsn;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->gbId) {
            $res['GbId'] = $this->gbId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->posInterval) {
            $res['PosInterval'] = $this->posInterval;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->registeredTime) {
            $res['RegisteredTime'] = $this->registeredTime;
        }
        if (null !== $this->stats) {
            $res['Stats'] = null !== $this->stats ? $this->stats->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
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
        if (isset($map['AlarmMethod'])) {
            $model->alarmMethod = $map['AlarmMethod'];
        }
        if (isset($map['AutoDirectory'])) {
            $model->autoDirectory = $map['AutoDirectory'];
        }
        if (isset($map['AutoPos'])) {
            $model->autoPos = $map['AutoPos'];
        }
        if (isset($map['AutoStart'])) {
            $model->autoStart = $map['AutoStart'];
        }
        if (isset($map['ChannelSyncTime'])) {
            $model->channelSyncTime = $map['ChannelSyncTime'];
        }
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Directory'])) {
            $model->directory = directory::fromMap($map['Directory']);
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['Dsn'])) {
            $model->dsn = $map['Dsn'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['GbId'])) {
            $model->gbId = $map['GbId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['PosInterval'])) {
            $model->posInterval = $map['PosInterval'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RegisteredTime'])) {
            $model->registeredTime = $map['RegisteredTime'];
        }
        if (isset($map['Stats'])) {
            $model->stats = stats::fromMap($map['Stats']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
