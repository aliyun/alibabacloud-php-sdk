<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetSaasDataUnitUsageResponseBody\distribution;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetSaasDataUnitUsageResponseBody\summary;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetSaasDataUnitUsageResponseBody\timeSeries;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\GetSaasDataUnitUsageResponseBody\warnings;

class GetSaasDataUnitUsageResponseBody extends Model
{
    /**
     * @var distribution[]
     */
    public $distribution;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var summary
     */
    public $summary;

    /**
     * @var timeSeries[]
     */
    public $timeSeries;

    /**
     * @var warnings[]
     */
    public $warnings;
    protected $_name = [
        'distribution' => 'Distribution',
        'endTime' => 'EndTime',
        'requestId' => 'RequestId',
        'serviceId' => 'ServiceId',
        'startTime' => 'StartTime',
        'summary' => 'Summary',
        'timeSeries' => 'TimeSeries',
        'warnings' => 'Warnings',
    ];

    public function validate()
    {
        if (\is_array($this->distribution)) {
            Model::validateArray($this->distribution);
        }
        if (null !== $this->summary) {
            $this->summary->validate();
        }
        if (\is_array($this->timeSeries)) {
            Model::validateArray($this->timeSeries);
        }
        if (\is_array($this->warnings)) {
            Model::validateArray($this->warnings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->distribution) {
            if (\is_array($this->distribution)) {
                $res['Distribution'] = [];
                $n1 = 0;
                foreach ($this->distribution as $item1) {
                    $res['Distribution'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->summary) {
            $res['Summary'] = null !== $this->summary ? $this->summary->toArray($noStream) : $this->summary;
        }

        if (null !== $this->timeSeries) {
            if (\is_array($this->timeSeries)) {
                $res['TimeSeries'] = [];
                $n1 = 0;
                foreach ($this->timeSeries as $item1) {
                    $res['TimeSeries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->warnings) {
            if (\is_array($this->warnings)) {
                $res['Warnings'] = [];
                $n1 = 0;
                foreach ($this->warnings as $item1) {
                    $res['Warnings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Distribution'])) {
            if (!empty($map['Distribution'])) {
                $model->distribution = [];
                $n1 = 0;
                foreach ($map['Distribution'] as $item1) {
                    $model->distribution[$n1] = distribution::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Summary'])) {
            $model->summary = summary::fromMap($map['Summary']);
        }

        if (isset($map['TimeSeries'])) {
            if (!empty($map['TimeSeries'])) {
                $model->timeSeries = [];
                $n1 = 0;
                foreach ($map['TimeSeries'] as $item1) {
                    $model->timeSeries[$n1] = timeSeries::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Warnings'])) {
            if (!empty($map['Warnings'])) {
                $model->warnings = [];
                $n1 = 0;
                foreach ($map['Warnings'] as $item1) {
                    $model->warnings[$n1] = warnings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
