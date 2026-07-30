<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeOfficeSiteBridgeInfoResponseBody;

use AlibabaCloud\Dara\Model;

class bridge extends Model
{
    /**
     * @var string
     */
    public $accessType;

    /**
     * @var string
     */
    public $bridgeId;

    /**
     * @var string
     */
    public $bridgeLevel;

    /**
     * @var string
     */
    public $bridgeStatus;

    /**
     * @var string
     */
    public $bridgeType;

    /**
     * @var string
     */
    public $defaultPassword;

    /**
     * @var string
     */
    public $defaultUser;

    /**
     * @var string
     */
    public $deployTime;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var string
     */
    public $internetUrl;

    /**
     * @var string
     */
    public $intranetUrl;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $officeSiteName;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'accessType' => 'AccessType',
        'bridgeId' => 'BridgeId',
        'bridgeLevel' => 'BridgeLevel',
        'bridgeStatus' => 'BridgeStatus',
        'bridgeType' => 'BridgeType',
        'defaultPassword' => 'DefaultPassword',
        'defaultUser' => 'DefaultUser',
        'deployTime' => 'DeployTime',
        'expireTime' => 'ExpireTime',
        'internetUrl' => 'InternetUrl',
        'intranetUrl' => 'IntranetUrl',
        'officeSiteId' => 'OfficeSiteId',
        'officeSiteName' => 'OfficeSiteName',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessType) {
            $res['AccessType'] = $this->accessType;
        }

        if (null !== $this->bridgeId) {
            $res['BridgeId'] = $this->bridgeId;
        }

        if (null !== $this->bridgeLevel) {
            $res['BridgeLevel'] = $this->bridgeLevel;
        }

        if (null !== $this->bridgeStatus) {
            $res['BridgeStatus'] = $this->bridgeStatus;
        }

        if (null !== $this->bridgeType) {
            $res['BridgeType'] = $this->bridgeType;
        }

        if (null !== $this->defaultPassword) {
            $res['DefaultPassword'] = $this->defaultPassword;
        }

        if (null !== $this->defaultUser) {
            $res['DefaultUser'] = $this->defaultUser;
        }

        if (null !== $this->deployTime) {
            $res['DeployTime'] = $this->deployTime;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->internetUrl) {
            $res['InternetUrl'] = $this->internetUrl;
        }

        if (null !== $this->intranetUrl) {
            $res['IntranetUrl'] = $this->intranetUrl;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['AccessType'])) {
            $model->accessType = $map['AccessType'];
        }

        if (isset($map['BridgeId'])) {
            $model->bridgeId = $map['BridgeId'];
        }

        if (isset($map['BridgeLevel'])) {
            $model->bridgeLevel = $map['BridgeLevel'];
        }

        if (isset($map['BridgeStatus'])) {
            $model->bridgeStatus = $map['BridgeStatus'];
        }

        if (isset($map['BridgeType'])) {
            $model->bridgeType = $map['BridgeType'];
        }

        if (isset($map['DefaultPassword'])) {
            $model->defaultPassword = $map['DefaultPassword'];
        }

        if (isset($map['DefaultUser'])) {
            $model->defaultUser = $map['DefaultUser'];
        }

        if (isset($map['DeployTime'])) {
            $model->deployTime = $map['DeployTime'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['InternetUrl'])) {
            $model->internetUrl = $map['InternetUrl'];
        }

        if (isset($map['IntranetUrl'])) {
            $model->intranetUrl = $map['IntranetUrl'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
