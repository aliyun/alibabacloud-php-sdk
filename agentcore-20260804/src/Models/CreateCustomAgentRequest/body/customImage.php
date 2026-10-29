<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateCustomAgentRequest\body;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateCustomAgentRequest\body\customImage\pullNetwork;

class customImage extends Model
{
    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $password;

    /**
     * @var pullNetwork
     */
    public $pullNetwork;

    /**
     * @var bool
     */
    public $skipTlsVerify;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'image' => 'image',
        'password' => 'password',
        'pullNetwork' => 'pullNetwork',
        'skipTlsVerify' => 'skipTlsVerify',
        'username' => 'username',
    ];

    public function validate()
    {
        if (null !== $this->pullNetwork) {
            $this->pullNetwork->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->image) {
            $res['image'] = $this->image;
        }

        if (null !== $this->password) {
            $res['password'] = $this->password;
        }

        if (null !== $this->pullNetwork) {
            $res['pullNetwork'] = null !== $this->pullNetwork ? $this->pullNetwork->toArray($noStream) : $this->pullNetwork;
        }

        if (null !== $this->skipTlsVerify) {
            $res['skipTlsVerify'] = $this->skipTlsVerify;
        }

        if (null !== $this->username) {
            $res['username'] = $this->username;
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
        if (isset($map['image'])) {
            $model->image = $map['image'];
        }

        if (isset($map['password'])) {
            $model->password = $map['password'];
        }

        if (isset($map['pullNetwork'])) {
            $model->pullNetwork = pullNetwork::fromMap($map['pullNetwork']);
        }

        if (isset($map['skipTlsVerify'])) {
            $model->skipTlsVerify = $map['skipTlsVerify'];
        }

        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        return $model;
    }
}
