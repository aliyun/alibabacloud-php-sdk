<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sConfigMapsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sConfigMapsResponseBody\result\configMaps;

class result extends Model
{
    /**
     * @var configMaps[]
     */
    public $configMaps;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'configMaps' => 'ConfigMaps',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->configMaps)) {
            Model::validateArray($this->configMaps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configMaps) {
            if (\is_array($this->configMaps)) {
                $res['ConfigMaps'] = [];
                $n1 = 0;
                foreach ($this->configMaps as $item1) {
                    $res['ConfigMaps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['ConfigMaps'])) {
            if (!empty($map['ConfigMaps'])) {
                $model->configMaps = [];
                $n1 = 0;
                foreach ($map['ConfigMaps'] as $item1) {
                    $model->configMaps[$n1] = configMaps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
