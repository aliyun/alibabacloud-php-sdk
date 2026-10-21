<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class GetIncidentInvestigationRequest extends Model
{
    /**
     * @var string
     */
    public $incidentInvestigationDisplayId;

    /**
     * @var string
     */
    public $incidentInvestigationId;

    /**
     * @var string
     */
    public $incidentUuid;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $roleFor;
    protected $_name = [
        'incidentInvestigationDisplayId' => 'IncidentInvestigationDisplayId',
        'incidentInvestigationId' => 'IncidentInvestigationId',
        'incidentUuid' => 'IncidentUuid',
        'lang' => 'Lang',
        'regionId' => 'RegionId',
        'roleFor' => 'RoleFor',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->incidentInvestigationDisplayId) {
            $res['IncidentInvestigationDisplayId'] = $this->incidentInvestigationDisplayId;
        }

        if (null !== $this->incidentInvestigationId) {
            $res['IncidentInvestigationId'] = $this->incidentInvestigationId;
        }

        if (null !== $this->incidentUuid) {
            $res['IncidentUuid'] = $this->incidentUuid;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->roleFor) {
            $res['RoleFor'] = $this->roleFor;
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
        if (isset($map['IncidentInvestigationDisplayId'])) {
            $model->incidentInvestigationDisplayId = $map['IncidentInvestigationDisplayId'];
        }

        if (isset($map['IncidentInvestigationId'])) {
            $model->incidentInvestigationId = $map['IncidentInvestigationId'];
        }

        if (isset($map['IncidentUuid'])) {
            $model->incidentUuid = $map['IncidentUuid'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RoleFor'])) {
            $model->roleFor = $map['RoleFor'];
        }

        return $model;
    }
}
