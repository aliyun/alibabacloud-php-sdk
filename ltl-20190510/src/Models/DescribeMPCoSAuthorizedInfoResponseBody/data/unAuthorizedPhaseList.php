<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models\DescribeMPCoSAuthorizedInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class unAuthorizedPhaseList extends Model
{
    /**
     * @example 987823074334****
     *
     * @var string
     */
    public $phaseId;

    /**
     * @var string
     */
    public $phaseName;
    protected $_name = [
        'phaseId'   => 'PhaseId',
        'phaseName' => 'PhaseName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->phaseId) {
            $res['PhaseId'] = $this->phaseId;
        }
        if (null !== $this->phaseName) {
            $res['PhaseName'] = $this->phaseName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return unAuthorizedPhaseList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhaseId'])) {
            $model->phaseId = $map['PhaseId'];
        }
        if (isset($map['PhaseName'])) {
            $model->phaseName = $map['PhaseName'];
        }

        return $model;
    }
}
