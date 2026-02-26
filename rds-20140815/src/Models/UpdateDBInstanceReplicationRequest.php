<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;

class UpdateDBInstanceReplicationRequest extends Model
{
    /**
     * @var string
     */
    public $channelName;

    /**
     * @var string
     */
    public $dbInstanceId;

    /**
     * @var string
     */
    public $masterHost;

    /**
     * @var string
     */
    public $masterPassword;

    /**
     * @var int
     */
    public $masterPort;

    /**
     * @var string
     */
    public $masterUser;

    /**
     * @var string
     */
    public $operation;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'channelName' => 'ChannelName',
        'dbInstanceId' => 'DbInstanceId',
        'masterHost' => 'MasterHost',
        'masterPassword' => 'MasterPassword',
        'masterPort' => 'MasterPort',
        'masterUser' => 'MasterUser',
        'operation' => 'Operation',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelName) {
            $res['ChannelName'] = $this->channelName;
        }

        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }

        if (null !== $this->masterHost) {
            $res['MasterHost'] = $this->masterHost;
        }

        if (null !== $this->masterPassword) {
            $res['MasterPassword'] = $this->masterPassword;
        }

        if (null !== $this->masterPort) {
            $res['MasterPort'] = $this->masterPort;
        }

        if (null !== $this->masterUser) {
            $res['MasterUser'] = $this->masterUser;
        }

        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ChannelName'])) {
            $model->channelName = $map['ChannelName'];
        }

        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }

        if (isset($map['MasterHost'])) {
            $model->masterHost = $map['MasterHost'];
        }

        if (isset($map['MasterPassword'])) {
            $model->masterPassword = $map['MasterPassword'];
        }

        if (isset($map['MasterPort'])) {
            $model->masterPort = $map['MasterPort'];
        }

        if (isset($map['MasterUser'])) {
            $model->masterUser = $map['MasterUser'];
        }

        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
