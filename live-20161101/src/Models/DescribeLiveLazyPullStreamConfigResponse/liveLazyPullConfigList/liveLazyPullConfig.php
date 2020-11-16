<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveLazyPullStreamConfigResponse\liveLazyPullConfigList;

use AlibabaCloud\Tea\Model;

class liveLazyPullConfig extends Model
{
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
    protected $_name = [
        'domainName'     => 'DomainName',
        'appName'        => 'AppName',
        'pullDomainName' => 'PullDomainName',
        'pullAppName'    => 'PullAppName',
        'pullProtocol'   => 'PullProtocol',
        'pullAuthType'   => 'PullAuthType',
        'pullAuthKey'    => 'PullAuthKey',
        'pullArgs'       => 'PullArgs',
    ];

    public function validate()
    {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('pullDomainName', $this->pullDomainName, true);
        Model::validateRequired('pullAppName', $this->pullAppName, true);
        Model::validateRequired('pullProtocol', $this->pullProtocol, true);
        Model::validateRequired('pullAuthType', $this->pullAuthType, true);
        Model::validateRequired('pullAuthKey', $this->pullAuthKey, true);
        Model::validateRequired('pullArgs', $this->pullArgs, true);
    }

    public function toMap()
    {
        $res = [];
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveLazyPullConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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

        return $model;
    }
}
