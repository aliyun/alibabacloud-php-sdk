<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class GetAvailabilityMetricRequest extends Model
{
    /**
     * @var string
     */
    public $appSource;

    /**
     * @var string
     */
    public $cpuStrategy;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'appSource' => 'AppSource',
        'cpuStrategy' => 'CpuStrategy',
        'limit' => 'Limit',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appSource) {
            $res['AppSource'] = $this->appSource;
        }

        if (null !== $this->cpuStrategy) {
            $res['CpuStrategy'] = $this->cpuStrategy;
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AppSource'])) {
            $model->appSource = $map['AppSource'];
        }

        if (isset($map['CpuStrategy'])) {
            $model->cpuStrategy = $map['CpuStrategy'];
        }

        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
