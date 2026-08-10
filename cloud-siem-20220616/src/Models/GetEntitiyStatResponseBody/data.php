<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\GetEntitiyStatResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $alertNum;

    /**
     * @var int
     */
    public $entityNum;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $entityUuid;

    /**
     * @var int
     */
    public $incidentNum;
    protected $_name = [
        'alertNum' => 'AlertNum',
        'entityNum' => 'EntityNum',
        'entityType' => 'EntityType',
        'entityUuid' => 'EntityUuid',
        'incidentNum' => 'IncidentNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertNum) {
            $res['AlertNum'] = $this->alertNum;
        }

        if (null !== $this->entityNum) {
            $res['EntityNum'] = $this->entityNum;
        }

        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        if (null !== $this->entityUuid) {
            $res['EntityUuid'] = $this->entityUuid;
        }

        if (null !== $this->incidentNum) {
            $res['IncidentNum'] = $this->incidentNum;
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
        if (isset($map['AlertNum'])) {
            $model->alertNum = $map['AlertNum'];
        }

        if (isset($map['EntityNum'])) {
            $model->entityNum = $map['EntityNum'];
        }

        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        if (isset($map['EntityUuid'])) {
            $model->entityUuid = $map['EntityUuid'];
        }

        if (isset($map['IncidentNum'])) {
            $model->incidentNum = $map['IncidentNum'];
        }

        return $model;
    }
}
