<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeBadSqlDetectionResponseBody\detectionItems\results;

use AlibabaCloud\Dara\Model;

class diagnosisResults extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $detail;
    /**
     * @var string
     */
    public $operatorId;
    /**
     * @var string
     */
    public $stageId;
    protected $_name = [
        'code'       => 'Code',
        'detail'     => 'Detail',
        'operatorId' => 'OperatorId',
        'stageId'    => 'StageId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        if (null !== $this->operatorId) {
            $res['OperatorId'] = $this->operatorId;
        }

        if (null !== $this->stageId) {
            $res['StageId'] = $this->stageId;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        if (isset($map['OperatorId'])) {
            $model->operatorId = $map['OperatorId'];
        }

        if (isset($map['StageId'])) {
            $model->stageId = $map['StageId'];
        }

        return $model;
    }
}
