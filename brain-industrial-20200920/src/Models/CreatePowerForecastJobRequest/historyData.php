<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\CreatePowerForecastJobRequest;

use AlibabaCloud\Dara\Model;

class historyData extends Model
{
    /**
     * @var string
     */
    public $runTime;
    /**
     * @var float
     */
    public $value;
    protected $_name = [
        'runTime' => 'RunTime',
        'value'   => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
