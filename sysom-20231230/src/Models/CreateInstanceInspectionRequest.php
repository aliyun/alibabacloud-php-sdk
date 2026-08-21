<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class CreateInstanceInspectionRequest extends Model
{
    /**
     * @var string
     */
    public $xDebugId;

    /**
     * @var string
     */
    public $instance;

    /**
     * @var string[]
     */
    public $items;

    /**
     * @var string
     */
    public $metricSource;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $xSysomInvokeSource;
    protected $_name = [
        'xDebugId' => 'X-Debug-Id',
        'instance' => 'instance',
        'items' => 'items',
        'metricSource' => 'metricSource',
        'region' => 'region',
        'source' => 'source',
        'xSysomInvokeSource' => 'x-sysom-invoke-source',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->xDebugId) {
            $res['X-Debug-Id'] = $this->xDebugId;
        }

        if (null !== $this->instance) {
            $res['instance'] = $this->instance;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['items'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->metricSource) {
            $res['metricSource'] = $this->metricSource;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->xSysomInvokeSource) {
            $res['x-sysom-invoke-source'] = $this->xSysomInvokeSource;
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
        if (isset($map['X-Debug-Id'])) {
            $model->xDebugId = $map['X-Debug-Id'];
        }

        if (isset($map['instance'])) {
            $model->instance = $map['instance'];
        }

        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['items'] as $item1) {
                    $model->items[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['metricSource'])) {
            $model->metricSource = $map['metricSource'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['x-sysom-invoke-source'])) {
            $model->xSysomInvokeSource = $map['x-sysom-invoke-source'];
        }

        return $model;
    }
}
