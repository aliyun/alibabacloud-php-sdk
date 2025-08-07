<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSchemeTaskConfigResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetSchemeTaskConfigResponseBody\data\dataConfig\assignConfigs;

class dataConfig extends Model
{
    /**
     * @var assignConfigs[]
     */
    public $assignConfigs;

    /**
     * @var string
     */
    public $dataSets;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $resultParam;
    protected $_name = [
        'assignConfigs' => 'AssignConfigs',
        'dataSets' => 'DataSets',
        'index' => 'Index',
        'resultParam' => 'ResultParam',
    ];

    public function validate()
    {
        if (\is_array($this->assignConfigs)) {
            Model::validateArray($this->assignConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignConfigs) {
            if (\is_array($this->assignConfigs)) {
                $res['AssignConfigs'] = [];
                $n1 = 0;
                foreach ($this->assignConfigs as $item1) {
                    $res['AssignConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssignConfigs'])) {
            if (!empty($map['AssignConfigs'])) {
                $model->assignConfigs = [];
                $n1 = 0;
                foreach ($map['AssignConfigs'] as $item1) {
                    $model->assignConfigs[$n1] = assignConfigs::fromMap($item1);
                    ++$n1;
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
