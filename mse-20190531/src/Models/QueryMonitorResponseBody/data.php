<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryMonitorResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $clusterNamePrefix;

    /**
     * @var string
     */
    public $podName;

    /**
     * @var mixed[][]
     */
    public $values;
    protected $_name = [
        'clusterNamePrefix' => 'clusterNamePrefix',
        'podName' => 'podName',
        'values' => 'values',
    ];

    public function validate()
    {
        if (\is_array($this->values)) {
            Model::validateArray($this->values);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterNamePrefix) {
            $res['clusterNamePrefix'] = $this->clusterNamePrefix;
        }

        if (null !== $this->podName) {
            $res['podName'] = $this->podName;
        }

        if (null !== $this->values) {
            if (\is_array($this->values)) {
                $res['values'] = [];
                $n1 = 0;
                foreach ($this->values as $item1) {
                    if (\is_array($item1)) {
                        $res['values'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['values'][$n1][$key2] = $value2;
                        }
                    }
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
        if (isset($map['clusterNamePrefix'])) {
            $model->clusterNamePrefix = $map['clusterNamePrefix'];
        }

        if (isset($map['podName'])) {
            $model->podName = $map['podName'];
        }

        if (isset($map['values'])) {
            if (!empty($map['values'])) {
                $model->values = [];
                $n1 = 0;
                foreach ($map['values'] as $item1) {
                    if (!empty($item1)) {
                        $model->values[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->values[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
