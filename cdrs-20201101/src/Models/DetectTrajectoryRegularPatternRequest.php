<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class DetectTrajectoryRegularPatternRequest extends Model
{
    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $idType;

    /**
     * @var string
     */
    public $idValue;

    /**
     * @var string
     */
    public $predictDate;
    protected $_name = [
        'corpId'      => 'CorpId',
        'idType'      => 'IdType',
        'idValue'     => 'IdValue',
        'predictDate' => 'PredictDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->idType) {
            $res['IdType'] = $this->idType;
        }
        if (null !== $this->idValue) {
            $res['IdValue'] = $this->idValue;
        }
        if (null !== $this->predictDate) {
            $res['PredictDate'] = $this->predictDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectTrajectoryRegularPatternRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['IdType'])) {
            $model->idType = $map['IdType'];
        }
        if (isset($map['IdValue'])) {
            $model->idValue = $map['IdValue'];
        }
        if (isset($map['PredictDate'])) {
            $model->predictDate = $map['PredictDate'];
        }

        return $model;
    }
}
