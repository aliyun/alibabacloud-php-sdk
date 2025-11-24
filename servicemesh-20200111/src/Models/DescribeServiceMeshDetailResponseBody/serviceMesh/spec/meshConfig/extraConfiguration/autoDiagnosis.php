<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration;

use AlibabaCloud\Dara\Model;

class autoDiagnosis extends Model
{
    /**
     * @var bool
     */
    public $autoDiagnosisEnabled;
    protected $_name = [
        'autoDiagnosisEnabled' => 'AutoDiagnosisEnabled',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoDiagnosisEnabled) {
            $res['AutoDiagnosisEnabled'] = $this->autoDiagnosisEnabled;
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
        if (isset($map['AutoDiagnosisEnabled'])) {
            $model->autoDiagnosisEnabled = $map['AutoDiagnosisEnabled'];
        }

        return $model;
    }
}
