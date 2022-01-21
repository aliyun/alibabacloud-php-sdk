<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutHybridMonitorMetricDataRequest;

use AlibabaCloud\SDK\Cms\V20190101\Models\PutHybridMonitorMetricDataRequest\metricList\labels;
use AlibabaCloud\Tea\Model;

class metricList extends Model
{
    /**
     * @description 标签，Key只能是英文字母、数字、下划线
     *
     * @var labels[]
     */
    public $labels;

    /**
     * @description 指标名，只能是英文字母、数字、下划线
     *
     * @var string
     */
    public $name;

    /**
     * @description 时间戳，unix毫秒数，如果不传会使用服务器时间
     *
     * @var int
     */
    public $TS;

    /**
     * @description 监控值，浮点或整型
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'labels' => 'Labels',
        'name'   => 'Name',
        'TS'     => 'TS',
        'value'  => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->TS) {
            $res['TS'] = $this->TS;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metricList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? labels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TS'])) {
            $model->TS = $map['TS'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
