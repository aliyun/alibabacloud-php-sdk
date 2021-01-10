<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SetLiveLazyPullStreamInfoConfigRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $pullDomainName;

    /**
     * @var string
     */
    public $pullAppName;

    /**
     * @var string
     */
    public $pullProtocol;

    /**
     * @var string
     */
    public $pullAuthType;

    /**
     * @var string
     */
    public $pullAuthKey;

    /**
     * @var string
     */
    public $pullArgs;

    /**
     * @var string
     */
    public $liveapiRequestFrom;
    protected $_name = [
        'ownerId'            => 'OwnerId',
        'domainName'         => 'DomainName',
        'appName'            => 'AppName',
        'pullDomainName'     => 'PullDomainName',
        'pullAppName'        => 'PullAppName',
        'pullProtocol'       => 'PullProtocol',
        'pullAuthType'       => 'PullAuthType',
        'pullAuthKey'        => 'PullAuthKey',
        'pullArgs'           => 'PullArgs',
        'liveapiRequestFrom' => 'LiveapiRequestFrom',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->pullDomainName) {
            $res['PullDomainName'] = $this->pullDomainName;
        }
        if (null !== $this->pullAppName) {
            $res['PullAppName'] = $this->pullAppName;
        }
        if (null !== $this->pullProtocol) {
            $res['PullProtocol'] = $this->pullProtocol;
        }
        if (null !== $this->pullAuthType) {
            $res['PullAuthType'] = $this->pullAuthType;
        }
        if (null !== $this->pullAuthKey) {
            $res['PullAuthKey'] = $this->pullAuthKey;
        }
        if (null !== $this->pullArgs) {
            $res['PullArgs'] = $this->pullArgs;
        }
        if (null !== $this->liveapiRequestFrom) {
            $res['LiveapiRequestFrom'] = $this->liveapiRequestFrom;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetLiveLazyPullStreamInfoConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['PullDomainName'])) {
            $model->pullDomainName = $map['PullDomainName'];
        }
        if (isset($map['PullAppName'])) {
            $model->pullAppName = $map['PullAppName'];
        }
        if (isset($map['PullProtocol'])) {
            $model->pullProtocol = $map['PullProtocol'];
        }
        if (isset($map['PullAuthType'])) {
            $model->pullAuthType = $map['PullAuthType'];
        }
        if (isset($map['PullAuthKey'])) {
            $model->pullAuthKey = $map['PullAuthKey'];
        }
        if (isset($map['PullArgs'])) {
            $model->pullArgs = $map['PullArgs'];
        }
        if (isset($map['LiveapiRequestFrom'])) {
            $model->liveapiRequestFrom = $map['LiveapiRequestFrom'];
        }

        return $model;
    }
}
