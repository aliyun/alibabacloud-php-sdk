<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetMcpResponseBody\data\deploymentConfig\nasConfiguration;

use AlibabaCloud\Dara\Model;

class mountPoints extends Model
{
    /**
     * @var bool
     */
    public $enableTls;

    /**
     * @var string
     */
    public $mountDir;

    /**
     * @var string
     */
    public $serverAddr;
    protected $_name = [
        'enableTls' => 'enableTls',
        'mountDir' => 'mountDir',
        'serverAddr' => 'serverAddr',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableTls) {
            $res['enableTls'] = $this->enableTls;
        }

        if (null !== $this->mountDir) {
            $res['mountDir'] = $this->mountDir;
        }

        if (null !== $this->serverAddr) {
            $res['serverAddr'] = $this->serverAddr;
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
        if (isset($map['enableTls'])) {
            $model->enableTls = $map['enableTls'];
        }

        if (isset($map['mountDir'])) {
            $model->mountDir = $map['mountDir'];
        }

        if (isset($map['serverAddr'])) {
            $model->serverAddr = $map['serverAddr'];
        }

        return $model;
    }
}
