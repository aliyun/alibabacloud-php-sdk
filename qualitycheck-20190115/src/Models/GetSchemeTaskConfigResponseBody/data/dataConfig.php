<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSchemeTaskConfigResponseBody\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSchemeTaskConfigResponseBody\data\dataConfig\assignConfigs;
use AlibabaCloud\Tea\Model;

class dataConfig extends Model
{
    /**
     * @var assignConfigs[]
     */
    public $assignConfigs;

    /**
     * @example []
     *
     * @var string
     */
    public $dataSets;

    /**
     * @example 0
     *
     * @var int
     */
    public $index;

    /**
     * @example {}
     *
     * @var string
     */
    public $resultParam;
    protected $_name = [
        'assignConfigs' => 'AssignConfigs',
        'dataSets' => 'DataSets',
        'index' => 'Index',
        'resultParam' => 'ResultParam',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignConfigs) {
            $res['AssignConfigs'] = [];
            if (null !== $this->assignConfigs && \is_array($this->assignConfigs)) {
                $n = 0;
                foreach ($this->assignConfigs as $item) {
                    $res['AssignConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dataSets) {
            $res['DataSets'] = $this->dataSets;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->resultParam) {
            $res['ResultParam'] = $this->resultParam;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssignConfigs'])) {
            if (!empty($map['AssignConfigs'])) {
                $model->assignConfigs = [];
                $n = 0;
                foreach ($map['AssignConfigs'] as $item) {
                    $model->assignConfigs[$n++] = null !== $item ? assignConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DataSets'])) {
            $model->dataSets = $map['DataSets'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['ResultParam'])) {
            $model->resultParam = $map['ResultParam'];
        }

        return $model;
    }
}
