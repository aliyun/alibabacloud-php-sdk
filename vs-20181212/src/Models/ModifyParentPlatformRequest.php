<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class ModifyParentPlatformRequest extends Model
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
    public $clientPassword;

    /**
     * @var string
     */
    public $clientUsername;

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
    public $ownerId;

    /**
     * @var int
     */
    public $port;
    protected $_name = [
        'autoStart'      => 'AutoStart',
        'clientAuth'     => 'ClientAuth',
        'clientPassword' => 'ClientPassword',
        'clientUsername' => 'ClientUsername',
        'description'    => 'Description',
        'gbId'           => 'GbId',
        'id'             => 'Id',
        'ip'             => 'Ip',
        'name'           => 'Name',
        'ownerId'        => 'OwnerId',
        'port'           => 'Port',
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
        if (null !== $this->clientPassword) {
            $res['ClientPassword'] = $this->clientPassword;
        }
        if (null !== $this->clientUsername) {
            $res['ClientUsername'] = $this->clientUsername;
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyParentPlatformRequest
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
        if (isset($map['ClientPassword'])) {
            $model->clientPassword = $map['ClientPassword'];
        }
        if (isset($map['ClientUsername'])) {
            $model->clientUsername = $map['ClientUsername'];
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
