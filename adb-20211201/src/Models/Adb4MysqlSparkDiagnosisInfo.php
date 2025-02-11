<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class Adb4MysqlSparkDiagnosisInfo extends Model
{
    /**
     * @var string
     */
    public $diagnosisCode;
    /**
     * @var string
     */
    public $diagnosisCodeLabel;
    /**
     * @var string
     */
    public $diagnosisMsg;
    /**
     * @var string
     */
    public $diagnosisType;
    protected $_name = [
        'diagnosisCode'      => 'DiagnosisCode',
        'diagnosisCodeLabel' => 'DiagnosisCodeLabel',
        'diagnosisMsg'       => 'DiagnosisMsg',
        'diagnosisType'      => 'DiagnosisType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diagnosisCode) {
            $res['DiagnosisCode'] = $this->diagnosisCode;
        }

        if (null !== $this->diagnosisCodeLabel) {
            $res['DiagnosisCodeLabel'] = $this->diagnosisCodeLabel;
        }

        if (null !== $this->diagnosisMsg) {
            $res['DiagnosisMsg'] = $this->diagnosisMsg;
        }

        if (null !== $this->diagnosisType) {
            $res['DiagnosisType'] = $this->diagnosisType;
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
        if (isset($map['DiagnosisCode'])) {
            $model->diagnosisCode = $map['DiagnosisCode'];
        }

        if (isset($map['DiagnosisCodeLabel'])) {
            $model->diagnosisCodeLabel = $map['DiagnosisCodeLabel'];
        }

        if (isset($map['DiagnosisMsg'])) {
            $model->diagnosisMsg = $map['DiagnosisMsg'];
        }

        if (isset($map['DiagnosisType'])) {
            $model->diagnosisType = $map['DiagnosisType'];
        }

        return $model;
    }
}
