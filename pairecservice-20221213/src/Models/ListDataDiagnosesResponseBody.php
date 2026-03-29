<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListDataDiagnosesResponseBody\dataDiagnoses;

class ListDataDiagnosesResponseBody extends Model
{
    /**
     * @var dataDiagnoses[]
     */
    public $dataDiagnoses;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dataDiagnoses' => 'DataDiagnoses',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->dataDiagnoses)) {
            Model::validateArray($this->dataDiagnoses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataDiagnoses) {
            if (\is_array($this->dataDiagnoses)) {
                $res['DataDiagnoses'] = [];
                $n1 = 0;
                foreach ($this->dataDiagnoses as $item1) {
                    $res['DataDiagnoses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DataDiagnoses'])) {
            if (!empty($map['DataDiagnoses'])) {
                $model->dataDiagnoses = [];
                $n1 = 0;
                foreach ($map['DataDiagnoses'] as $item1) {
                    $model->dataDiagnoses[$n1] = dataDiagnoses::fromMap($item1);
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
