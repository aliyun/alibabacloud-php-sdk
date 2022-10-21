<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data\dataConfig\assignConfigs;
use AlibabaCloud\Tea\Model;

class dataConfig extends Model
{
    /**
     * @var assignConfigs
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
        'dataSets'      => 'DataSets',
        'index'         => 'Index',
        'resultParam'   => 'ResultParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignConfigs) {
            $res['AssignConfigs'] = null !== $this->assignConfigs ? $this->assignConfigs->toMap() : null;
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
            $model->assignConfigs = assignConfigs::fromMap($map['AssignConfigs']);
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
