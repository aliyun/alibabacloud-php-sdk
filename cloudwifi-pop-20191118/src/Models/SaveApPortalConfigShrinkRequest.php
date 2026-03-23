<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Dara\Model;

class SaveApPortalConfigShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $apConfigId;

    /**
     * @var string
     */
    public $appAuthUrl;

    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $authKey;

    /**
     * @var string
     */
    public $authSecret;

    /**
     * @var string
     */
    public $checkUrl;

    /**
     * @var int
     */
    public $clientDownload;

    /**
     * @var int
     */
    public $clientUpload;

    /**
     * @var int
     */
    public $countdown;

    /**
     * @var int
     */
    public $network;

    /**
     * @var string
     */
    public $portalTypesShrink;

    /**
     * @var string
     */
    public $portalUrl;

    /**
     * @var int
     */
    public $timeStamp;

    /**
     * @var int
     */
    public $totalDownload;

    /**
     * @var int
     */
    public $totalUpload;

    /**
     * @var string
     */
    public $webAuthUrl;

    /**
     * @var string
     */
    public $whitelist;
    protected $_name = [
        'apConfigId' => 'ApConfigId',
        'appAuthUrl' => 'AppAuthUrl',
        'appCode' => 'AppCode',
        'appName' => 'AppName',
        'authKey' => 'AuthKey',
        'authSecret' => 'AuthSecret',
        'checkUrl' => 'CheckUrl',
        'clientDownload' => 'ClientDownload',
        'clientUpload' => 'ClientUpload',
        'countdown' => 'Countdown',
        'network' => 'Network',
        'portalTypesShrink' => 'PortalTypes',
        'portalUrl' => 'PortalUrl',
        'timeStamp' => 'TimeStamp',
        'totalDownload' => 'TotalDownload',
        'totalUpload' => 'TotalUpload',
        'webAuthUrl' => 'WebAuthUrl',
        'whitelist' => 'Whitelist',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apConfigId) {
            $res['ApConfigId'] = $this->apConfigId;
        }

        if (null !== $this->appAuthUrl) {
            $res['AppAuthUrl'] = $this->appAuthUrl;
        }

        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }

        if (null !== $this->authSecret) {
            $res['AuthSecret'] = $this->authSecret;
        }

        if (null !== $this->checkUrl) {
            $res['CheckUrl'] = $this->checkUrl;
        }

        if (null !== $this->clientDownload) {
            $res['ClientDownload'] = $this->clientDownload;
        }

        if (null !== $this->clientUpload) {
            $res['ClientUpload'] = $this->clientUpload;
        }

        if (null !== $this->countdown) {
            $res['Countdown'] = $this->countdown;
        }

        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }

        if (null !== $this->portalTypesShrink) {
            $res['PortalTypes'] = $this->portalTypesShrink;
        }

        if (null !== $this->portalUrl) {
            $res['PortalUrl'] = $this->portalUrl;
        }

        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        if (null !== $this->totalDownload) {
            $res['TotalDownload'] = $this->totalDownload;
        }

        if (null !== $this->totalUpload) {
            $res['TotalUpload'] = $this->totalUpload;
        }

        if (null !== $this->webAuthUrl) {
            $res['WebAuthUrl'] = $this->webAuthUrl;
        }

        if (null !== $this->whitelist) {
            $res['Whitelist'] = $this->whitelist;
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
        if (isset($map['ApConfigId'])) {
            $model->apConfigId = $map['ApConfigId'];
        }

        if (isset($map['AppAuthUrl'])) {
            $model->appAuthUrl = $map['AppAuthUrl'];
        }

        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }

        if (isset($map['AuthSecret'])) {
            $model->authSecret = $map['AuthSecret'];
        }

        if (isset($map['CheckUrl'])) {
            $model->checkUrl = $map['CheckUrl'];
        }

        if (isset($map['ClientDownload'])) {
            $model->clientDownload = $map['ClientDownload'];
        }

        if (isset($map['ClientUpload'])) {
            $model->clientUpload = $map['ClientUpload'];
        }

        if (isset($map['Countdown'])) {
            $model->countdown = $map['Countdown'];
        }

        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }

        if (isset($map['PortalTypes'])) {
            $model->portalTypesShrink = $map['PortalTypes'];
        }

        if (isset($map['PortalUrl'])) {
            $model->portalUrl = $map['PortalUrl'];
        }

        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        if (isset($map['TotalDownload'])) {
            $model->totalDownload = $map['TotalDownload'];
        }

        if (isset($map['TotalUpload'])) {
            $model->totalUpload = $map['TotalUpload'];
        }

        if (isset($map['WebAuthUrl'])) {
            $model->webAuthUrl = $map['WebAuthUrl'];
        }

        if (isset($map['Whitelist'])) {
            $model->whitelist = $map['Whitelist'];
        }

        return $model;
    }
}
