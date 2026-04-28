<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListAutoDisposeEntitiesResponseBody;

use AlibabaCloud\Dara\Model;

class autoDecisionEntities extends Model
{
    /**
     * @var string
     */
    public $alertId;

    /**
     * @var string
     */
    public $disposalMethod;

    /**
     * @var string
     */
    public $disposeRecordId;

    /**
     * @var string
     */
    public $entityName;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $entityUuid;

    /**
     * @var string
     */
    public $playbookUuid;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'alertId' => 'AlertId',
        'disposalMethod' => 'DisposalMethod',
        'disposeRecordId' => 'DisposeRecordId',
        'entityName' => 'EntityName',
        'entityType' => 'EntityType',
        'entityUuid' => 'EntityUuid',
        'playbookUuid' => 'PlaybookUuid',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertId) {
            $res['AlertId'] = $this->alertId;
        }

        if (null !== $this->disposalMethod) {
            $res['DisposalMethod'] = $this->disposalMethod;
        }

        if (null !== $this->disposeRecordId) {
            $res['DisposeRecordId'] = $this->disposeRecordId;
        }

        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
        }

        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        if (null !== $this->entityUuid) {
            $res['EntityUuid'] = $this->entityUuid;
        }

        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['AlertId'])) {
            $model->alertId = $map['AlertId'];
        }

        if (isset($map['DisposalMethod'])) {
            $model->disposalMethod = $map['DisposalMethod'];
        }

        if (isset($map['DisposeRecordId'])) {
            $model->disposeRecordId = $map['DisposeRecordId'];
        }

        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }

        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        if (isset($map['EntityUuid'])) {
            $model->entityUuid = $map['EntityUuid'];
        }

        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
