<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateCustomAgentRequest\body;

use AlibabaCloud\Dara\Model;

class agenticFsMounts extends Model
{
    /**
     * @var string
     */
    public $mountPath;

    /**
     * @var string
     */
    public $path;

    /**
     * @var bool
     */
    public $readOnly;

    /**
     * @var string
     */
    public $server;
    protected $_name = [
        'mountPath' => 'mountPath',
        'path' => 'path',
        'readOnly' => 'readOnly',
        'server' => 'server',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mountPath) {
            $res['mountPath'] = $this->mountPath;
        }

        if (null !== $this->path) {
            $res['path'] = $this->path;
        }

        if (null !== $this->readOnly) {
            $res['readOnly'] = $this->readOnly;
        }

        if (null !== $this->server) {
            $res['server'] = $this->server;
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
        if (isset($map['mountPath'])) {
            $model->mountPath = $map['mountPath'];
        }

        if (isset($map['path'])) {
            $model->path = $map['path'];
        }

        if (isset($map['readOnly'])) {
            $model->readOnly = $map['readOnly'];
        }

        if (isset($map['server'])) {
            $model->server = $map['server'];
        }

        return $model;
    }
}
