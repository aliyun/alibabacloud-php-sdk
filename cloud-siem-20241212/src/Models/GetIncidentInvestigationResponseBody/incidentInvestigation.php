<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetIncidentInvestigationResponseBody;

use AlibabaCloud\Dara\Model;

class incidentInvestigation extends Model
{
    /**
     * @var string
     */
    public $incidentInvestigationAlertName;

    /**
     * @var string
     */
    public $incidentInvestigationConclusion;

    /**
     * @var string
     */
    public $incidentInvestigationDisplayId;

    /**
     * @var int
     */
    public $incidentInvestigationEndTime;

    /**
     * @var string
     */
    public $incidentInvestigationId;

    /**
     * @var string
     */
    public $incidentInvestigationOutput;

    /**
     * @var string
     */
    public $incidentInvestigationReport;

    /**
     * @var int
     */
    public $incidentInvestigationStartTime;

    /**
     * @var string
     */
    public $incidentInvestigationStatus;

    /**
     * @var string
     */
    public $incidentInvestigationSummary;

    /**
     * @var string
     */
    public $incidentUuid;
    protected $_name = [
        'incidentInvestigationAlertName' => 'IncidentInvestigationAlertName',
        'incidentInvestigationConclusion' => 'IncidentInvestigationConclusion',
        'incidentInvestigationDisplayId' => 'IncidentInvestigationDisplayId',
        'incidentInvestigationEndTime' => 'IncidentInvestigationEndTime',
        'incidentInvestigationId' => 'IncidentInvestigationId',
        'incidentInvestigationOutput' => 'IncidentInvestigationOutput',
        'incidentInvestigationReport' => 'IncidentInvestigationReport',
        'incidentInvestigationStartTime' => 'IncidentInvestigationStartTime',
        'incidentInvestigationStatus' => 'IncidentInvestigationStatus',
        'incidentInvestigationSummary' => 'IncidentInvestigationSummary',
        'incidentUuid' => 'IncidentUuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->incidentInvestigationAlertName) {
            $res['IncidentInvestigationAlertName'] = $this->incidentInvestigationAlertName;
        }

        if (null !== $this->incidentInvestigationConclusion) {
            $res['IncidentInvestigationConclusion'] = $this->incidentInvestigationConclusion;
        }

        if (null !== $this->incidentInvestigationDisplayId) {
            $res['IncidentInvestigationDisplayId'] = $this->incidentInvestigationDisplayId;
        }

        if (null !== $this->incidentInvestigationEndTime) {
            $res['IncidentInvestigationEndTime'] = $this->incidentInvestigationEndTime;
        }

        if (null !== $this->incidentInvestigationId) {
            $res['IncidentInvestigationId'] = $this->incidentInvestigationId;
        }

        if (null !== $this->incidentInvestigationOutput) {
            $res['IncidentInvestigationOutput'] = $this->incidentInvestigationOutput;
        }

        if (null !== $this->incidentInvestigationReport) {
            $res['IncidentInvestigationReport'] = $this->incidentInvestigationReport;
        }

        if (null !== $this->incidentInvestigationStartTime) {
            $res['IncidentInvestigationStartTime'] = $this->incidentInvestigationStartTime;
        }

        if (null !== $this->incidentInvestigationStatus) {
            $res['IncidentInvestigationStatus'] = $this->incidentInvestigationStatus;
        }

        if (null !== $this->incidentInvestigationSummary) {
            $res['IncidentInvestigationSummary'] = $this->incidentInvestigationSummary;
        }

        if (null !== $this->incidentUuid) {
            $res['IncidentUuid'] = $this->incidentUuid;
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
        if (isset($map['IncidentInvestigationAlertName'])) {
            $model->incidentInvestigationAlertName = $map['IncidentInvestigationAlertName'];
        }

        if (isset($map['IncidentInvestigationConclusion'])) {
            $model->incidentInvestigationConclusion = $map['IncidentInvestigationConclusion'];
        }

        if (isset($map['IncidentInvestigationDisplayId'])) {
            $model->incidentInvestigationDisplayId = $map['IncidentInvestigationDisplayId'];
        }

        if (isset($map['IncidentInvestigationEndTime'])) {
            $model->incidentInvestigationEndTime = $map['IncidentInvestigationEndTime'];
        }

        if (isset($map['IncidentInvestigationId'])) {
            $model->incidentInvestigationId = $map['IncidentInvestigationId'];
        }

        if (isset($map['IncidentInvestigationOutput'])) {
            $model->incidentInvestigationOutput = $map['IncidentInvestigationOutput'];
        }

        if (isset($map['IncidentInvestigationReport'])) {
            $model->incidentInvestigationReport = $map['IncidentInvestigationReport'];
        }

        if (isset($map['IncidentInvestigationStartTime'])) {
            $model->incidentInvestigationStartTime = $map['IncidentInvestigationStartTime'];
        }

        if (isset($map['IncidentInvestigationStatus'])) {
            $model->incidentInvestigationStatus = $map['IncidentInvestigationStatus'];
        }

        if (isset($map['IncidentInvestigationSummary'])) {
            $model->incidentInvestigationSummary = $map['IncidentInvestigationSummary'];
        }

        if (isset($map['IncidentUuid'])) {
            $model->incidentUuid = $map['IncidentUuid'];
        }

        return $model;
    }
}
