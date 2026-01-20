<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryConfigResponseBody\data\nacosRunningEnv;

use AlibabaCloud\Dara\Model;

class fencePolicy extends Model
{
    /**
     * @var string[]
     */
    public $enabledModules;

    /**
     * @var string[]
     */
    public $interceptPolicy;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'enabledModules' => 'enabledModules',
        'interceptPolicy' => 'interceptPolicy',
        'serviceName' => 'serviceName',
    ];

    public function validate()
    {
        if (\is_array($this->enabledModules)) {
            Model::validateArray($this->enabledModules);
        }
        if (\is_array($this->interceptPolicy)) {
            Model::validateArray($this->interceptPolicy);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enabledModules) {
            if (\is_array($this->enabledModules)) {
                $res['enabledModules'] = [];
                $n1 = 0;
                foreach ($this->enabledModules as $item1) {
                    $res['enabledModules'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->interceptPolicy) {
            if (\is_array($this->interceptPolicy)) {
                $res['interceptPolicy'] = [];
                foreach ($this->interceptPolicy as $key1 => $value1) {
                    $res['interceptPolicy'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
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
        if (isset($map['enabledModules'])) {
            if (!empty($map['enabledModules'])) {
                $model->enabledModules = [];
                $n1 = 0;
                foreach ($map['enabledModules'] as $item1) {
                    $model->enabledModules[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['interceptPolicy'])) {
            if (!empty($map['interceptPolicy'])) {
                $model->interceptPolicy = [];
                foreach ($map['interceptPolicy'] as $key1 => $value1) {
                    $model->interceptPolicy[$key1] = $value1;
                }
            }
        }

        if (isset($map['serviceName'])) {
            $model->serviceName = $map['serviceName'];
        }

        return $model;
    }
}
