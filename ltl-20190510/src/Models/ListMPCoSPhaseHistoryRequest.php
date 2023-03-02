<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models;

use AlibabaCloud\Tea\Model;

class ListMPCoSPhaseHistoryRequest extends Model
{
    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $apiVersion;

    /**
     * @example 489973087549****
     *
     * @var string
     */
    public $bizChainId;

    /**
     * @example 32bfce96b4e2f9bec0f2ea5cc2f14ace1486cc146d5832d3a84e5332fe89****
     *
     * @var string
     */
    public $dataKey;

    /**
     * @example 1606389090866
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $num;

    /**
     * @example 383860792287****
     *
     * @var string
     */
    public $phaseGroupId;

    /**
     * @example 644208887511****
     *
     * @var string
     */
    public $phaseId;

    /**
     * @example 2
     *
     * @var int
     */
    public $size;

    /**
     * @example 1606379090866
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'apiVersion'   => 'ApiVersion',
        'bizChainId'   => 'BizChainId',
        'dataKey'      => 'DataKey',
        'endTime'      => 'EndTime',
        'num'          => 'Num',
        'phaseGroupId' => 'PhaseGroupId',
        'phaseId'      => 'PhaseId',
        'size'         => 'Size',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiVersion) {
            $res['ApiVersion'] = $this->apiVersion;
        }
        if (null !== $this->bizChainId) {
            $res['BizChainId'] = $this->bizChainId;
        }
        if (null !== $this->dataKey) {
            $res['DataKey'] = $this->dataKey;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }
        if (null !== $this->phaseGroupId) {
            $res['PhaseGroupId'] = $this->phaseGroupId;
        }
        if (null !== $this->phaseId) {
            $res['PhaseId'] = $this->phaseId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMPCoSPhaseHistoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiVersion'])) {
            $model->apiVersion = $map['ApiVersion'];
        }
        if (isset($map['BizChainId'])) {
            $model->bizChainId = $map['BizChainId'];
        }
        if (isset($map['DataKey'])) {
            $model->dataKey = $map['DataKey'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }
        if (isset($map['PhaseGroupId'])) {
            $model->phaseGroupId = $map['PhaseGroupId'];
        }
        if (isset($map['PhaseId'])) {
            $model->phaseId = $map['PhaseId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
