<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\InstallWorkspacePluginRequest\body\config;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\InstallWorkspacePluginRequest\body\config\network\internet;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\InstallWorkspacePluginRequest\body\config\network\vpc;

class network extends Model
{
    /**
     * @var internet
     */
    public $internet;

    /**
     * @var vpc
     */
    public $vpc;
    protected $_name = [
        'internet' => 'internet',
        'vpc' => 'vpc',
    ];

    public function validate()
    {
        if (null !== $this->internet) {
            $this->internet->validate();
        }
        if (null !== $this->vpc) {
            $this->vpc->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->internet) {
            $res['internet'] = null !== $this->internet ? $this->internet->toArray($noStream) : $this->internet;
        }

        if (null !== $this->vpc) {
            $res['vpc'] = null !== $this->vpc ? $this->vpc->toArray($noStream) : $this->vpc;
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
        if (isset($map['internet'])) {
            $model->internet = internet::fromMap($map['internet']);
        }

        if (isset($map['vpc'])) {
            $model->vpc = vpc::fromMap($map['vpc']);
        }

        return $model;
    }
}
