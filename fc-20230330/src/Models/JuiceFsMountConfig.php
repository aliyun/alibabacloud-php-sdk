<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class JuiceFsMountConfig extends Model
{
    /**
     * @var string[]
     */
    public $args;

    /**
     * @var string
     */
    public $mountDir;

    /**
     * @var string
     */
    public $remoteDir;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $volumeName;
    protected $_name = [
        'args' => 'args',
        'mountDir' => 'mountDir',
        'remoteDir' => 'remoteDir',
        'token' => 'token',
        'volumeName' => 'volumeName',
    ];

    public function validate()
    {
        if (\is_array($this->args)) {
            Model::validateArray($this->args);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->args) {
            if (\is_array($this->args)) {
                $res['args'] = [];
                $n1 = 0;
                foreach ($this->args as $item1) {
                    $res['args'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mountDir) {
            $res['mountDir'] = $this->mountDir;
        }

        if (null !== $this->remoteDir) {
            $res['remoteDir'] = $this->remoteDir;
        }

        if (null !== $this->token) {
            $res['token'] = $this->token;
        }

        if (null !== $this->volumeName) {
            $res['volumeName'] = $this->volumeName;
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
        if (isset($map['args'])) {
            if (!empty($map['args'])) {
                $model->args = [];
                $n1 = 0;
                foreach ($map['args'] as $item1) {
                    $model->args[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['mountDir'])) {
            $model->mountDir = $map['mountDir'];
        }

        if (isset($map['remoteDir'])) {
            $model->remoteDir = $map['remoteDir'];
        }

        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        if (isset($map['volumeName'])) {
            $model->volumeName = $map['volumeName'];
        }

        return $model;
    }
}
