<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\ListDataReportForServiceGroupResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $escalationIncidentCount;

    /**
     * @example 111
     *
     * @var int
     */
    public $finishIncidentCount;

    /**
     * @example 19%
     *
     * @var string
     */
    public $finishProportion;

    /**
     * @example 1
     *
     * @var int
     */
    public $incidentCount;

    /**
     * @description MRRA
     *
     * @example 3分19秒
     *
     * @var int
     */
    public $meanTimeToAcknowledge;

    /**
     * @description MTTR
     *
     * @example 3分19秒
     *
     * @var int
     */
    public $meanTimeToRepair;

    /**
     * @example 100
     *
     * @var int
     */
    public $serviceGroupId;

    /**
     * @example 服务组
     *
     * @var string
     */
    public $serviceGroupName;

    /**
     * @example 200
     *
     * @var int
     */
    public $unAcknowledgedEscalationIncidentCount;

    /**
     * @example 200
     *
     * @var int
     */
    public $unFinishEscalationIncidentCount;
    protected $_name = [
        'escalationIncidentCount'               => 'escalationIncidentCount',
        'finishIncidentCount'                   => 'finishIncidentCount',
        'finishProportion'                      => 'finishProportion',
        'incidentCount'                         => 'incidentCount',
        'meanTimeToAcknowledge'                 => 'meanTimeToAcknowledge',
        'meanTimeToRepair'                      => 'meanTimeToRepair',
        'serviceGroupId'                        => 'serviceGroupId',
        'serviceGroupName'                      => 'serviceGroupName',
        'unAcknowledgedEscalationIncidentCount' => 'unAcknowledgedEscalationIncidentCount',
        'unFinishEscalationIncidentCount'       => 'unFinishEscalationIncidentCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->escalationIncidentCount) {
            $res['escalationIncidentCount'] = $this->escalationIncidentCount;
        }
        if (null !== $this->finishIncidentCount) {
            $res['finishIncidentCount'] = $this->finishIncidentCount;
        }
        if (null !== $this->finishProportion) {
            $res['finishProportion'] = $this->finishProportion;
        }
        if (null !== $this->incidentCount) {
            $res['incidentCount'] = $this->incidentCount;
        }
        if (null !== $this->meanTimeToAcknowledge) {
            $res['meanTimeToAcknowledge'] = $this->meanTimeToAcknowledge;
        }
        if (null !== $this->meanTimeToRepair) {
            $res['meanTimeToRepair'] = $this->meanTimeToRepair;
        }
        if (null !== $this->serviceGroupId) {
            $res['serviceGroupId'] = $this->serviceGroupId;
        }
        if (null !== $this->serviceGroupName) {
            $res['serviceGroupName'] = $this->serviceGroupName;
        }
        if (null !== $this->unAcknowledgedEscalationIncidentCount) {
            $res['unAcknowledgedEscalationIncidentCount'] = $this->unAcknowledgedEscalationIncidentCount;
        }
        if (null !== $this->unFinishEscalationIncidentCount) {
            $res['unFinishEscalationIncidentCount'] = $this->unFinishEscalationIncidentCount;
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
        if (isset($map['escalationIncidentCount'])) {
            $model->escalationIncidentCount = $map['escalationIncidentCount'];
        }
        if (isset($map['finishIncidentCount'])) {
            $model->finishIncidentCount = $map['finishIncidentCount'];
        }
        if (isset($map['finishProportion'])) {
            $model->finishProportion = $map['finishProportion'];
        }
        if (isset($map['incidentCount'])) {
            $model->incidentCount = $map['incidentCount'];
        }
        if (isset($map['meanTimeToAcknowledge'])) {
            $model->meanTimeToAcknowledge = $map['meanTimeToAcknowledge'];
        }
        if (isset($map['meanTimeToRepair'])) {
            $model->meanTimeToRepair = $map['meanTimeToRepair'];
        }
        if (isset($map['serviceGroupId'])) {
            $model->serviceGroupId = $map['serviceGroupId'];
        }
        if (isset($map['serviceGroupName'])) {
            $model->serviceGroupName = $map['serviceGroupName'];
        }
        if (isset($map['unAcknowledgedEscalationIncidentCount'])) {
            $model->unAcknowledgedEscalationIncidentCount = $map['unAcknowledgedEscalationIncidentCount'];
        }
        if (isset($map['unFinishEscalationIncidentCount'])) {
            $model->unFinishEscalationIncidentCount = $map['unFinishEscalationIncidentCount'];
        }

        return $model;
    }
}
