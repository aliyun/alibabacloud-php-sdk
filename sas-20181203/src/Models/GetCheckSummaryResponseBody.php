<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckSummaryResponseBody\overallItemStatistic;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckSummaryResponseBody\overallStatistic;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckSummaryResponseBody\summarys;

class GetCheckSummaryResponseBody extends Model
{
    /**
     * @var overallItemStatistic
     */
    public $overallItemStatistic;

    /**
     * @var overallStatistic
     */
    public $overallStatistic;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var summarys[]
     */
    public $summarys;
    protected $_name = [
        'overallItemStatistic' => 'OverallItemStatistic',
        'overallStatistic' => 'OverallStatistic',
        'requestId' => 'RequestId',
        'summarys' => 'Summarys',
    ];

    public function validate()
    {
        if (null !== $this->overallItemStatistic) {
            $this->overallItemStatistic->validate();
        }
        if (null !== $this->overallStatistic) {
            $this->overallStatistic->validate();
        }
        if (\is_array($this->summarys)) {
            Model::validateArray($this->summarys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->overallItemStatistic) {
            $res['OverallItemStatistic'] = null !== $this->overallItemStatistic ? $this->overallItemStatistic->toArray($noStream) : $this->overallItemStatistic;
        }

        if (null !== $this->overallStatistic) {
            $res['OverallStatistic'] = null !== $this->overallStatistic ? $this->overallStatistic->toArray($noStream) : $this->overallStatistic;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->summarys) {
            if (\is_array($this->summarys)) {
                $res['Summarys'] = [];
                $n1 = 0;
                foreach ($this->summarys as $item1) {
                    $res['Summarys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OverallItemStatistic'])) {
            $model->overallItemStatistic = overallItemStatistic::fromMap($map['OverallItemStatistic']);
        }

        if (isset($map['OverallStatistic'])) {
            $model->overallStatistic = overallStatistic::fromMap($map['OverallStatistic']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Summarys'])) {
            if (!empty($map['Summarys'])) {
                $model->summarys = [];
                $n1 = 0;
                foreach ($map['Summarys'] as $item1) {
                    $model->summarys[$n1] = summarys::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
