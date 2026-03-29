<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\QueryDataDiagnosisStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class statistics extends Model
{
    /**
     * @var string[]
     */
    public $failedDates;

    /**
     * @var string[]
     */
    public $noDataDates;
    protected $_name = [
        'failedDates' => 'FailedDates',
        'noDataDates' => 'NoDataDates',
    ];

    public function validate()
    {
        if (\is_array($this->failedDates)) {
            Model::validateArray($this->failedDates);
        }
        if (\is_array($this->noDataDates)) {
            Model::validateArray($this->noDataDates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedDates) {
            if (\is_array($this->failedDates)) {
                $res['FailedDates'] = [];
                $n1 = 0;
                foreach ($this->failedDates as $item1) {
                    $res['FailedDates'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->noDataDates) {
            if (\is_array($this->noDataDates)) {
                $res['NoDataDates'] = [];
                $n1 = 0;
                foreach ($this->noDataDates as $item1) {
                    $res['NoDataDates'][$n1] = $item1;
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
        if (isset($map['FailedDates'])) {
            if (!empty($map['FailedDates'])) {
                $model->failedDates = [];
                $n1 = 0;
                foreach ($map['FailedDates'] as $item1) {
                    $model->failedDates[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NoDataDates'])) {
            if (!empty($map['NoDataDates'])) {
                $model->noDataDates = [];
                $n1 = 0;
                foreach ($map['NoDataDates'] as $item1) {
                    $model->noDataDates[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
