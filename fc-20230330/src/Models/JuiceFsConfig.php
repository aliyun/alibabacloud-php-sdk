<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class JuiceFsConfig extends Model
{
    /**
     * @var string[]
     */
    public $envs;

    /**
     * @var JuiceFsMountConfig[]
     */
    public $mountPoints;
    protected $_name = [
        'envs' => 'envs',
        'mountPoints' => 'mountPoints',
    ];

    public function validate()
    {
        if (\is_array($this->envs)) {
            Model::validateArray($this->envs);
        }
        if (\is_array($this->mountPoints)) {
            Model::validateArray($this->mountPoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->envs) {
            if (\is_array($this->envs)) {
                $res['envs'] = [];
                foreach ($this->envs as $key1 => $value1) {
                    $res['envs'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->mountPoints) {
            if (\is_array($this->mountPoints)) {
                $res['mountPoints'] = [];
                $n1 = 0;
                foreach ($this->mountPoints as $item1) {
                    $res['mountPoints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['envs'])) {
            if (!empty($map['envs'])) {
                $model->envs = [];
                foreach ($map['envs'] as $key1 => $value1) {
                    $model->envs[$key1] = $value1;
                }
            }
        }

        if (isset($map['mountPoints'])) {
            if (!empty($map['mountPoints'])) {
                $model->mountPoints = [];
                $n1 = 0;
                foreach ($map['mountPoints'] as $item1) {
                    $model->mountPoints[$n1] = JuiceFsMountConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
