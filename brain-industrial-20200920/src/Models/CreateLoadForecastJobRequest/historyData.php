<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreateLoadForecastJobRequest;

use AlibabaCloud\Tea\Model;

class historyData extends Model
{
    /**
     * @example 2025-12-12 00:00:00
     *
     * @var string
     */
    public $runTime;

    /**
     * @example 1.0
     *
     * @var float
     */
    public $value;
    protected $_name = [
        'runTime' => 'RunTime',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->runTime) {
            $res['RunTime'] = $this->runTime;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return historyData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RunTime'])) {
            $model->runTime = $map['RunTime'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
