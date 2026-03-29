<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class CreateDataDiagnosisJobsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $dataDiagnosisJobIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataDiagnosisJobIds' => 'DataDiagnosisJobIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->dataDiagnosisJobIds)) {
            Model::validateArray($this->dataDiagnosisJobIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataDiagnosisJobIds) {
            if (\is_array($this->dataDiagnosisJobIds)) {
                $res['DataDiagnosisJobIds'] = [];
                $n1 = 0;
                foreach ($this->dataDiagnosisJobIds as $item1) {
                    $res['DataDiagnosisJobIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DataDiagnosisJobIds'])) {
            if (!empty($map['DataDiagnosisJobIds'])) {
                $model->dataDiagnosisJobIds = [];
                $n1 = 0;
                foreach ($map['DataDiagnosisJobIds'] as $item1) {
                    $model->dataDiagnosisJobIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
