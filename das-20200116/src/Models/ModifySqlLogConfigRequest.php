<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DAS\V20200116\Models\ModifySqlLogConfigRequest\filters;

class ModifySqlLogConfigRequest extends Model
{
    /**
     * @var bool
     */
    public $enable;
    /**
     * @var filters[]
     */
    public $filters;
    /**
     * @var int
     */
    public $hotRetention;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var bool
     */
    public $requestEnable;
    /**
     * @var int
     */
    public $retention;
    protected $_name = [
        'enable'        => 'Enable',
        'filters'       => 'Filters',
        'hotRetention'  => 'HotRetention',
        'instanceId'    => 'InstanceId',
        'requestEnable' => 'RequestEnable',
        'retention'     => 'Retention',
    ];

    public function validate()
    {
        if (\is_array($this->filters)) {
            Model::validateArray($this->filters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->filters) {
            if (\is_array($this->filters)) {
                $res['Filters'] = [];
                $n1             = 0;
                foreach ($this->filters as $item1) {
                    $res['Filters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->hotRetention) {
            $res['HotRetention'] = $this->hotRetention;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->requestEnable) {
            $res['RequestEnable'] = $this->requestEnable;
        }

        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
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
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['Filters'])) {
            if (!empty($map['Filters'])) {
                $model->filters = [];
                $n1             = 0;
                foreach ($map['Filters'] as $item1) {
                    $model->filters[$n1++] = filters::fromMap($item1);
                }
            }
        }

        if (isset($map['HotRetention'])) {
            $model->hotRetention = $map['HotRetention'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RequestEnable'])) {
            $model->requestEnable = $map['RequestEnable'];
        }

        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }

        return $model;
    }
}
