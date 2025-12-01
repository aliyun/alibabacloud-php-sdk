<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\PageServiceCustomerResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $aliuid;

    /**
     * @var int
     */
    public $authStatus;

    /**
     * @var int
     */
    public $cmAuthStatus;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $level;

    /**
     * @var int
     */
    public $monitorAuthStatus;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'aliuid' => 'Aliuid',
        'authStatus' => 'AuthStatus',
        'cmAuthStatus' => 'CmAuthStatus',
        'endTime' => 'EndTime',
        'level' => 'Level',
        'monitorAuthStatus' => 'MonitorAuthStatus',
        'name' => 'Name',
        'ownId' => 'OwnId',
        'startTime' => 'StartTime',
        'userId' => 'UserId',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliuid) {
            $res['Aliuid'] = $this->aliuid;
        }

        if (null !== $this->authStatus) {
            $res['AuthStatus'] = $this->authStatus;
        }

        if (null !== $this->cmAuthStatus) {
            $res['CmAuthStatus'] = $this->cmAuthStatus;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->monitorAuthStatus) {
            $res['MonitorAuthStatus'] = $this->monitorAuthStatus;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ownId) {
            $res['OwnId'] = $this->ownId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Aliuid'])) {
            $model->aliuid = $map['Aliuid'];
        }

        if (isset($map['AuthStatus'])) {
            $model->authStatus = $map['AuthStatus'];
        }

        if (isset($map['CmAuthStatus'])) {
            $model->cmAuthStatus = $map['CmAuthStatus'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['MonitorAuthStatus'])) {
            $model->monitorAuthStatus = $map['MonitorAuthStatus'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OwnId'])) {
            $model->ownId = $map['OwnId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
