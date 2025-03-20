<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class CreateDeviceRequest extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $alarmMethod;

    /**
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
     * @var string
     */
    public $description;

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
     * @example 31000000****00000002
     *
     * @var string
     */
    public $gbId;

    /**
     * @description This parameter is required.
     *
     * @example 348*****174-cn-qingdao
     *
     * @var string
     */
    public $groupId;

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
     * @var int
     */
    public $ownerId;

    /**
     * @example {}
     *
     * @var string
     */
    public $params;

    /**
     * @example 399*****774-cn-qingdao
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
     * @description This parameter is required.
     *
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
        'alarmMethod' => 'AlarmMethod',
        'autoDirectory' => 'AutoDirectory',
        'autoPos' => 'AutoPos',
        'autoStart' => 'AutoStart',
        'description' => 'Description',
        'directoryId' => 'DirectoryId',
        'dsn' => 'Dsn',
        'gbId' => 'GbId',
        'groupId' => 'GroupId',
        'ip' => 'Ip',
        'latitude' => 'Latitude',
        'longitude' => 'Longitude',
        'name' => 'Name',
        'ownerId' => 'OwnerId',
        'params' => 'Params',
        'parentId' => 'ParentId',
        'password' => 'Password',
        'port' => 'Port',
        'posInterval' => 'PosInterval',
        'type' => 'Type',
        'url' => 'Url',
        'username' => 'Username',
        'vendor' => 'Vendor',
    ];

    public function validate() {}

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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->dsn) {
            $res['Dsn'] = $this->dsn;
        }
        if (null !== $this->gbId) {
            $res['GbId'] = $this->gbId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
     * @return CreateDeviceRequest
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['Dsn'])) {
            $model->dsn = $map['Dsn'];
        }
        if (isset($map['GbId'])) {
            $model->gbId = $map['GbId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
