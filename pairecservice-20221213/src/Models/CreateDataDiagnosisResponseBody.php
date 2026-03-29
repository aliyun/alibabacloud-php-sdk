<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class CreateDataDiagnosisResponseBody extends Model
{
    /**
     * @var string
     */
    public $dataDiagnosisId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataDiagnosisId' => 'DataDiagnosisId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataDiagnosisId) {
            $res['DataDiagnosisId'] = $this->dataDiagnosisId;
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
        if (isset($map['DataDiagnosisId'])) {
            $model->dataDiagnosisId = $map['DataDiagnosisId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
