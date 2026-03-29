<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListDataDiagnosisJobsResponseBody\dataDiagnosisJobs;

class ListDataDiagnosisJobsResponseBody extends Model
{
    /**
     * @var dataDiagnosisJobs[]
     */
    public $dataDiagnosisJobs;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dataDiagnosisJobs' => 'DataDiagnosisJobs',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->dataDiagnosisJobs)) {
            Model::validateArray($this->dataDiagnosisJobs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataDiagnosisJobs) {
            if (\is_array($this->dataDiagnosisJobs)) {
                $res['DataDiagnosisJobs'] = [];
                $n1 = 0;
                foreach ($this->dataDiagnosisJobs as $item1) {
                    $res['DataDiagnosisJobs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['DataDiagnosisJobs'])) {
            if (!empty($map['DataDiagnosisJobs'])) {
                $model->dataDiagnosisJobs = [];
                $n1 = 0;
                foreach ($map['DataDiagnosisJobs'] as $item1) {
                    $model->dataDiagnosisJobs[$n1] = dataDiagnosisJobs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
