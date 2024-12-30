<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeBadSqlDetectionResponseBody\detectionItems\results;

use AlibabaCloud\Tea\Model;

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
     * @example TableScan[234]
     *
     * @var string
     */
    public $operatorId;

    /**
     * @description StageID。
     *
     * @example Stage[67]
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return diagnosisResults
     */
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
