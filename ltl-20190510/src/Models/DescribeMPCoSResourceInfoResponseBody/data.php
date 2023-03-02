<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models\DescribeMPCoSResourceInfoResponseBody;

use AlibabaCloud\SDK\Ltl\V20190510\Models\DescribeMPCoSResourceInfoResponseBody\data\phaseQuotaInfoList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $memberQuota;

    /**
     * @example 200
     *
     * @var int
     */
    public $phaseGroupQuota;

    /**
     * @var phaseQuotaInfoList[]
     */
    public $phaseQuotaInfoList;

    /**
     * @example 5
     *
     * @var int
     */
    public $usedMember;

    /**
     * @example 10
     *
     * @var int
     */
    public $usedPhaseGroup;
    protected $_name = [
        'memberQuota'        => 'MemberQuota',
        'phaseGroupQuota'    => 'PhaseGroupQuota',
        'phaseQuotaInfoList' => 'PhaseQuotaInfoList',
        'usedMember'         => 'UsedMember',
        'usedPhaseGroup'     => 'UsedPhaseGroup',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memberQuota) {
            $res['MemberQuota'] = $this->memberQuota;
        }
        if (null !== $this->phaseGroupQuota) {
            $res['PhaseGroupQuota'] = $this->phaseGroupQuota;
        }
        if (null !== $this->phaseQuotaInfoList) {
            $res['PhaseQuotaInfoList'] = [];
            if (null !== $this->phaseQuotaInfoList && \is_array($this->phaseQuotaInfoList)) {
                $n = 0;
                foreach ($this->phaseQuotaInfoList as $item) {
                    $res['PhaseQuotaInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->usedMember) {
            $res['UsedMember'] = $this->usedMember;
        }
        if (null !== $this->usedPhaseGroup) {
            $res['UsedPhaseGroup'] = $this->usedPhaseGroup;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MemberQuota'])) {
            $model->memberQuota = $map['MemberQuota'];
        }
        if (isset($map['PhaseGroupQuota'])) {
            $model->phaseGroupQuota = $map['PhaseGroupQuota'];
        }
        if (isset($map['PhaseQuotaInfoList'])) {
            if (!empty($map['PhaseQuotaInfoList'])) {
                $model->phaseQuotaInfoList = [];
                $n                         = 0;
                foreach ($map['PhaseQuotaInfoList'] as $item) {
                    $model->phaseQuotaInfoList[$n++] = null !== $item ? phaseQuotaInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UsedMember'])) {
            $model->usedMember = $map['UsedMember'];
        }
        if (isset($map['UsedPhaseGroup'])) {
            $model->usedPhaseGroup = $map['UsedPhaseGroup'];
        }

        return $model;
    }
}
