<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetWorkspaceResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetWorkspaceResponseBody\data\networkConfiguration\vpc;

class networkConfiguration extends Model
{
    /**
     * @var bool
     */
    public $publicEgressEnabled;

    /**
     * @var string
     */
    public $publicEgressIp;

    /**
     * @var bool
     */
    public $publicIngressEnabled;

    /**
     * @var vpc
     */
    public $vpc;
    protected $_name = [
        'publicEgressEnabled' => 'publicEgressEnabled',
        'publicEgressIp' => 'publicEgressIp',
        'publicIngressEnabled' => 'publicIngressEnabled',
        'vpc' => 'vpc',
    ];

    public function validate()
    {
        if (null !== $this->vpc) {
            $this->vpc->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->publicEgressEnabled) {
            $res['publicEgressEnabled'] = $this->publicEgressEnabled;
        }

        if (null !== $this->publicEgressIp) {
            $res['publicEgressIp'] = $this->publicEgressIp;
        }

        if (null !== $this->publicIngressEnabled) {
            $res['publicIngressEnabled'] = $this->publicIngressEnabled;
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
        if (isset($map['publicEgressEnabled'])) {
            $model->publicEgressEnabled = $map['publicEgressEnabled'];
        }

        if (isset($map['publicEgressIp'])) {
            $model->publicEgressIp = $map['publicEgressIp'];
        }

        if (isset($map['publicIngressEnabled'])) {
            $model->publicIngressEnabled = $map['publicIngressEnabled'];
        }

        if (isset($map['vpc'])) {
            $model->vpc = vpc::fromMap($map['vpc']);
        }

        return $model;
    }
}
