<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class PredictTrajectoryDestinationRequest extends Model
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
     * @var int
     */
    public $predictTimeSpan;
    protected $_name = [
        'corpId'          => 'CorpId',
        'idType'          => 'IdType',
        'idValue'         => 'IdValue',
        'predictTimeSpan' => 'PredictTimeSpan',
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
        if (null !== $this->predictTimeSpan) {
            $res['PredictTimeSpan'] = $this->predictTimeSpan;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PredictTrajectoryDestinationRequest
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
        if (isset($map['PredictTimeSpan'])) {
            $model->predictTimeSpan = $map['PredictTimeSpan'];
        }

        return $model;
    }
}
