<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Dara\Model;

class GetAutoIncrementUsageStatisticRequest extends Model
{
    /**
     * @var string
     */
    public $dbNames;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var float
     */
    public $ratioFilter;

    /**
     * @var bool
     */
    public $realTime;
    protected $_name = [
        'dbNames' => 'DbNames',
        'instanceId' => 'InstanceId',
        'ratioFilter' => 'RatioFilter',
        'realTime' => 'RealTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbNames) {
            $res['DbNames'] = $this->dbNames;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ratioFilter) {
            $res['RatioFilter'] = $this->ratioFilter;
        }

        if (null !== $this->realTime) {
            $res['RealTime'] = $this->realTime;
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
        if (isset($map['DbNames'])) {
            $model->dbNames = $map['DbNames'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['RatioFilter'])) {
            $model->ratioFilter = $map['RatioFilter'];
        }

        if (isset($map['RealTime'])) {
            $model->realTime = $map['RealTime'];
        }

        return $model;
    }
}
