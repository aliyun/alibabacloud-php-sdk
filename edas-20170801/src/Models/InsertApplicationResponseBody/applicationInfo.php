<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\InsertApplicationResponseBody;

use AlibabaCloud\Tea\Model;

class applicationInfo extends Model
{
    /**
     * @var string
     */
    public $changeOrderId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var bool
     */
    public $dockerize;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $port;
    protected $_name = [
        'changeOrderId' => 'ChangeOrderId',
        'appName'       => 'AppName',
        'owner'         => 'Owner',
        'dockerize'     => 'Dockerize',
        'regionName'    => 'RegionName',
        'appId'         => 'AppId',
        'userId'        => 'UserId',
        'port'          => 'Port',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeOrderId) {
            $res['ChangeOrderId'] = $this->changeOrderId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->dockerize) {
            $res['Dockerize'] = $this->dockerize;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applicationInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeOrderId'])) {
            $model->changeOrderId = $map['ChangeOrderId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Dockerize'])) {
            $model->dockerize = $map['Dockerize'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
