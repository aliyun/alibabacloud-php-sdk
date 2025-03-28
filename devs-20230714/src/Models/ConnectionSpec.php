<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $platform;
    protected $_name = [
        'account' => 'account',
        'gitlabConfig' => 'gitlabConfig',
        'platform' => 'platform',
    ];

    public function validate()
    {
        if (null !== $this->account) {
            $this->account->validate();
        }
        if (null !== $this->gitlabConfig) {
            $this->gitlabConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->account) {
            $res['account'] = null !== $this->account ? $this->account->toArray($noStream) : $this->account;
        }

        if (null !== $this->gitlabConfig) {
            $res['gitlabConfig'] = null !== $this->gitlabConfig ? $this->gitlabConfig->toArray($noStream) : $this->gitlabConfig;
        }

        if (null !== $this->platform) {
            $res['platform'] = $this->platform;
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
