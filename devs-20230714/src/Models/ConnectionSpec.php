<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class ConnectionSpec extends Model
{
    /**
     * @var GitAccount
     */
    public $account;

    /**
     * @var GitLabConfig
     */
    public $gitlabConfig;

    /**
     * @description This parameter is required.
     *
     * @example github
     *
     * @var string
     */
    public $platform;
    protected $_name = [
        'account'      => 'account',
        'gitlabConfig' => 'gitlabConfig',
        'platform'     => 'platform',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['account'] = null !== $this->account ? $this->account->toMap() : null;
        }
        if (null !== $this->gitlabConfig) {
            $res['gitlabConfig'] = null !== $this->gitlabConfig ? $this->gitlabConfig->toMap() : null;
        }
        if (null !== $this->platform) {
            $res['platform'] = $this->platform;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConnectionSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['account'])) {
            $model->account = GitAccount::fromMap($map['account']);
        }
        if (isset($map['gitlabConfig'])) {
            $model->gitlabConfig = GitLabConfig::fromMap($map['gitlabConfig']);
        }
        if (isset($map['platform'])) {
            $model->platform = $map['platform'];
        }

        return $model;
    }
}
