<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class Session extends Model
{
    /**
     * @var bool
     */
    public $allowInternetAccess;

    /**
     * @var string
     */
    public $containerId;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var bool
     */
    public $disableSessionIdReuse;

    /**
     * @var bool
     */
    public $enableAutoPause;

    /**
     * @var bool
     */
    public $enableAutoResume;

    /**
     * @var string
     */
    public $functionName;

    /**
     * @var JuiceFsConfig
     */
    public $juiceFsConfig;

    /**
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var NASConfig
     */
    public $nasConfig;

    /**
     * @var CreateSessionNetworkConfig
     */
    public $network;

    /**
     * @var OSSMountConfig
     */
    public $ossMountConfig;

    /**
     * @var PolarFsConfig
     */
    public $polarFsConfig;

    /**
     * @var string
     */
    public $qualifier;

    /**
     * @var string
     */
    public $sessionAffinityType;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var int
     */
    public $sessionIdleTimeoutInSeconds;

    /**
     * @var string
     */
    public $sessionStatus;

    /**
     * @var int
     */
    public $sessionTTLInSeconds;

    /**
     * @var string
     */
    public $trafficAccessToken;
    protected $_name = [
        'allowInternetAccess' => 'allowInternetAccess',
        'containerId' => 'containerId',
        'createdTime' => 'createdTime',
        'disableSessionIdReuse' => 'disableSessionIdReuse',
        'enableAutoPause' => 'enableAutoPause',
        'enableAutoResume' => 'enableAutoResume',
        'functionName' => 'functionName',
        'juiceFsConfig' => 'juiceFsConfig',
        'lastModifiedTime' => 'lastModifiedTime',
        'nasConfig' => 'nasConfig',
        'network' => 'network',
        'ossMountConfig' => 'ossMountConfig',
        'polarFsConfig' => 'polarFsConfig',
        'qualifier' => 'qualifier',
        'sessionAffinityType' => 'sessionAffinityType',
        'sessionId' => 'sessionId',
        'sessionIdleTimeoutInSeconds' => 'sessionIdleTimeoutInSeconds',
        'sessionStatus' => 'sessionStatus',
        'sessionTTLInSeconds' => 'sessionTTLInSeconds',
        'trafficAccessToken' => 'trafficAccessToken',
    ];

    public function validate()
    {
        if (null !== $this->juiceFsConfig) {
            $this->juiceFsConfig->validate();
        }
        if (null !== $this->nasConfig) {
            $this->nasConfig->validate();
        }
        if (null !== $this->network) {
            $this->network->validate();
        }
        if (null !== $this->ossMountConfig) {
            $this->ossMountConfig->validate();
        }
        if (null !== $this->polarFsConfig) {
            $this->polarFsConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowInternetAccess) {
            $res['allowInternetAccess'] = $this->allowInternetAccess;
        }

        if (null !== $this->containerId) {
            $res['containerId'] = $this->containerId;
        }

        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }

        if (null !== $this->disableSessionIdReuse) {
            $res['disableSessionIdReuse'] = $this->disableSessionIdReuse;
        }

        if (null !== $this->enableAutoPause) {
            $res['enableAutoPause'] = $this->enableAutoPause;
        }

        if (null !== $this->enableAutoResume) {
            $res['enableAutoResume'] = $this->enableAutoResume;
        }

        if (null !== $this->functionName) {
            $res['functionName'] = $this->functionName;
        }

        if (null !== $this->juiceFsConfig) {
            $res['juiceFsConfig'] = null !== $this->juiceFsConfig ? $this->juiceFsConfig->toArray($noStream) : $this->juiceFsConfig;
        }

        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
        }

        if (null !== $this->nasConfig) {
            $res['nasConfig'] = null !== $this->nasConfig ? $this->nasConfig->toArray($noStream) : $this->nasConfig;
        }

        if (null !== $this->network) {
            $res['network'] = null !== $this->network ? $this->network->toArray($noStream) : $this->network;
        }

        if (null !== $this->ossMountConfig) {
            $res['ossMountConfig'] = null !== $this->ossMountConfig ? $this->ossMountConfig->toArray($noStream) : $this->ossMountConfig;
        }

        if (null !== $this->polarFsConfig) {
            $res['polarFsConfig'] = null !== $this->polarFsConfig ? $this->polarFsConfig->toArray($noStream) : $this->polarFsConfig;
        }

        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }

        if (null !== $this->sessionAffinityType) {
            $res['sessionAffinityType'] = $this->sessionAffinityType;
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->sessionIdleTimeoutInSeconds) {
            $res['sessionIdleTimeoutInSeconds'] = $this->sessionIdleTimeoutInSeconds;
        }

        if (null !== $this->sessionStatus) {
            $res['sessionStatus'] = $this->sessionStatus;
        }

        if (null !== $this->sessionTTLInSeconds) {
            $res['sessionTTLInSeconds'] = $this->sessionTTLInSeconds;
        }

        if (null !== $this->trafficAccessToken) {
            $res['trafficAccessToken'] = $this->trafficAccessToken;
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
        if (isset($map['allowInternetAccess'])) {
            $model->allowInternetAccess = $map['allowInternetAccess'];
        }

        if (isset($map['containerId'])) {
            $model->containerId = $map['containerId'];
        }

        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }

        if (isset($map['disableSessionIdReuse'])) {
            $model->disableSessionIdReuse = $map['disableSessionIdReuse'];
        }

        if (isset($map['enableAutoPause'])) {
            $model->enableAutoPause = $map['enableAutoPause'];
        }

        if (isset($map['enableAutoResume'])) {
            $model->enableAutoResume = $map['enableAutoResume'];
        }

        if (isset($map['functionName'])) {
            $model->functionName = $map['functionName'];
        }

        if (isset($map['juiceFsConfig'])) {
            $model->juiceFsConfig = JuiceFsConfig::fromMap($map['juiceFsConfig']);
        }

        if (isset($map['lastModifiedTime'])) {
            $model->lastModifiedTime = $map['lastModifiedTime'];
        }

        if (isset($map['nasConfig'])) {
            $model->nasConfig = NASConfig::fromMap($map['nasConfig']);
        }

        if (isset($map['network'])) {
            $model->network = CreateSessionNetworkConfig::fromMap($map['network']);
        }

        if (isset($map['ossMountConfig'])) {
            $model->ossMountConfig = OSSMountConfig::fromMap($map['ossMountConfig']);
        }

        if (isset($map['polarFsConfig'])) {
            $model->polarFsConfig = PolarFsConfig::fromMap($map['polarFsConfig']);
        }

        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        if (isset($map['sessionAffinityType'])) {
            $model->sessionAffinityType = $map['sessionAffinityType'];
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['sessionIdleTimeoutInSeconds'])) {
            $model->sessionIdleTimeoutInSeconds = $map['sessionIdleTimeoutInSeconds'];
        }

        if (isset($map['sessionStatus'])) {
            $model->sessionStatus = $map['sessionStatus'];
        }

        if (isset($map['sessionTTLInSeconds'])) {
            $model->sessionTTLInSeconds = $map['sessionTTLInSeconds'];
        }

        if (isset($map['trafficAccessToken'])) {
            $model->trafficAccessToken = $map['trafficAccessToken'];
        }

        return $model;
    }
}
