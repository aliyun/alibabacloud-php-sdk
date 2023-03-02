<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models\DescribeMPCoSResourceInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class phaseQuotaInfoList extends Model
{
    /**
     * @example 383860792287****
     *
     * @var string
     */
    public $phaseGroupId;

    /**
     * @var string
     */
    public $phaseGroupName;

    /**
     * @example 5
     *
     * @var int
     */
    public $phaseQuota;

    /**
     * @example 3
     *
     * @var int
     */
    public $usedPhase;
    protected $_name = [
        'phaseGroupId'   => 'PhaseGroupId',
        'phaseGroupName' => 'PhaseGroupName',
        'phaseQuota'     => 'PhaseQuota',
        'usedPhase'      => 'UsedPhase',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->phaseGroupId) {
            $res['PhaseGroupId'] = $this->phaseGroupId;
        }
        if (null !== $this->phaseGroupName) {
            $res['PhaseGroupName'] = $this->phaseGroupName;
        }
        if (null !== $this->phaseQuota) {
            $res['PhaseQuota'] = $this->phaseQuota;
        }
        if (null !== $this->usedPhase) {
            $res['UsedPhase'] = $this->usedPhase;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return phaseQuotaInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PhaseGroupId'])) {
            $model->phaseGroupId = $map['PhaseGroupId'];
        }
        if (isset($map['PhaseGroupName'])) {
            $model->phaseGroupName = $map['PhaseGroupName'];
        }
        if (isset($map['PhaseQuota'])) {
            $model->phaseQuota = $map['PhaseQuota'];
        }
        if (isset($map['UsedPhase'])) {
            $model->usedPhase = $map['UsedPhase'];
        }

        return $model;
    }
}
