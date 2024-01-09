<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeRecoveryPointsResponseBody\recoveryPoints;

use AlibabaCloud\Tea\Model;

class recoveryPoint extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $applicationConsistent;

    /**
     * @example inconsistent
     *
     * @var string
     */
    public $disableReason;

    /**
     * @example false
     *
     * @var bool
     */
    public $disabled;

    /**
     * @example rp-0000syrdl2f8a7te4063
     *
     * @var string
     */
    public $recoveryPointId;

    /**
     * @example 1637118000
     *
     * @var int
     */
    public $recoveryPointTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $used;
    protected $_name = [
        'applicationConsistent' => 'ApplicationConsistent',
        'disableReason'         => 'DisableReason',
        'disabled'              => 'Disabled',
        'recoveryPointId'       => 'RecoveryPointId',
        'recoveryPointTime'     => 'RecoveryPointTime',
        'used'                  => 'Used',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationConsistent) {
            $res['ApplicationConsistent'] = $this->applicationConsistent;
        }
        if (null !== $this->disableReason) {
            $res['DisableReason'] = $this->disableReason;
        }
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->recoveryPointId) {
            $res['RecoveryPointId'] = $this->recoveryPointId;
        }
        if (null !== $this->recoveryPointTime) {
            $res['RecoveryPointTime'] = $this->recoveryPointTime;
        }
        if (null !== $this->used) {
            $res['Used'] = $this->used;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recoveryPoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationConsistent'])) {
            $model->applicationConsistent = $map['ApplicationConsistent'];
        }
        if (isset($map['DisableReason'])) {
            $model->disableReason = $map['DisableReason'];
        }
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['RecoveryPointId'])) {
            $model->recoveryPointId = $map['RecoveryPointId'];
        }
        if (isset($map['RecoveryPointTime'])) {
            $model->recoveryPointTime = $map['RecoveryPointTime'];
        }
        if (isset($map['Used'])) {
            $model->used = $map['Used'];
        }

        return $model;
    }
}
