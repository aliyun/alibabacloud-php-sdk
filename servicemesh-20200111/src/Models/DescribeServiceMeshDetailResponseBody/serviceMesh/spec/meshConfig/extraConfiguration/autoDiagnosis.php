<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshDetailResponseBody\serviceMesh\spec\meshConfig\extraConfiguration;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoDiagnosisEnabled) {
            $res['AutoDiagnosisEnabled'] = $this->autoDiagnosisEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoDiagnosis
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoDiagnosisEnabled'])) {
            $model->autoDiagnosisEnabled = $map['AutoDiagnosisEnabled'];
        }

        return $model;
    }
}
