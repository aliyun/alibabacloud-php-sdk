<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDisposeStrategyResponseBody\data;

use AlibabaCloud\Dara\Model;

class responseData extends Model
{
    /**
     * @var string
     */
    public $alertUuid;

    /**
     * @var int
     */
    public $aliuid;

    /**
     * @var int
     */
    public $effectiveStatus;

    /**
     * @var mixed[]
     */
    public $entity;

    /**
     * @var int
     */
    public $entityId;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $incidentName;

    /**
     * @var string
     */
    public $incidentUuid;

    /**
     * @var string
     */
    public $playbookName;

    /**
     * @var string
     */
    public $playbookType;

    /**
     * @var string
     */
    public $playbookUuid;

    /**
     * @var mixed[]
     */
    public $scope;

    /**
     * @var string
     */
    public $sophonTaskId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $subAliuid;

    /**
     * @var string
     */
    public $taskParam;

    /**
     * @var string
     */
    public $taskUrl;
    protected $_name = [
        'alertUuid' => 'AlertUuid',
        'aliuid' => 'Aliuid',
        'effectiveStatus' => 'EffectiveStatus',
        'entity' => 'Entity',
        'entityId' => 'EntityId',
        'entityType' => 'EntityType',
        'errorMessage' => 'ErrorMessage',
        'finishTime' => 'FinishTime',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'incidentName' => 'IncidentName',
        'incidentUuid' => 'IncidentUuid',
        'playbookName' => 'PlaybookName',
        'playbookType' => 'PlaybookType',
        'playbookUuid' => 'PlaybookUuid',
        'scope' => 'Scope',
        'sophonTaskId' => 'SophonTaskId',
        'status' => 'Status',
        'subAliuid' => 'SubAliuid',
        'taskParam' => 'TaskParam',
        'taskUrl' => 'TaskUrl',
    ];

    public function validate()
    {
        if (\is_array($this->entity)) {
            Model::validateArray($this->entity);
        }
        if (\is_array($this->scope)) {
            Model::validateArray($this->scope);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertUuid) {
            $res['AlertUuid'] = $this->alertUuid;
        }

        if (null !== $this->aliuid) {
            $res['Aliuid'] = $this->aliuid;
        }

        if (null !== $this->effectiveStatus) {
            $res['EffectiveStatus'] = $this->effectiveStatus;
        }

        if (null !== $this->entity) {
            if (\is_array($this->entity)) {
                $res['Entity'] = [];
                $n1 = 0;
                foreach ($this->entity as $item1) {
                    $res['Entity'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->incidentName) {
            $res['IncidentName'] = $this->incidentName;
        }

        if (null !== $this->incidentUuid) {
            $res['IncidentUuid'] = $this->incidentUuid;
        }

        if (null !== $this->playbookName) {
            $res['PlaybookName'] = $this->playbookName;
        }

        if (null !== $this->playbookType) {
            $res['PlaybookType'] = $this->playbookType;
        }

        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }

        if (null !== $this->scope) {
            if (\is_array($this->scope)) {
                $res['Scope'] = [];
                $n1 = 0;
                foreach ($this->scope as $item1) {
                    $res['Scope'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->sophonTaskId) {
            $res['SophonTaskId'] = $this->sophonTaskId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subAliuid) {
            $res['SubAliuid'] = $this->subAliuid;
        }

        if (null !== $this->taskParam) {
            $res['TaskParam'] = $this->taskParam;
        }

        if (null !== $this->taskUrl) {
            $res['TaskUrl'] = $this->taskUrl;
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
        if (isset($map['AlertUuid'])) {
            $model->alertUuid = $map['AlertUuid'];
        }

        if (isset($map['Aliuid'])) {
            $model->aliuid = $map['Aliuid'];
        }

        if (isset($map['EffectiveStatus'])) {
            $model->effectiveStatus = $map['EffectiveStatus'];
        }

        if (isset($map['Entity'])) {
            if (!empty($map['Entity'])) {
                $model->entity = [];
                $n1 = 0;
                foreach ($map['Entity'] as $item1) {
                    $model->entity[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IncidentName'])) {
            $model->incidentName = $map['IncidentName'];
        }

        if (isset($map['IncidentUuid'])) {
            $model->incidentUuid = $map['IncidentUuid'];
        }

        if (isset($map['PlaybookName'])) {
            $model->playbookName = $map['PlaybookName'];
        }

        if (isset($map['PlaybookType'])) {
            $model->playbookType = $map['PlaybookType'];
        }

        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        if (isset($map['Scope'])) {
            if (!empty($map['Scope'])) {
                $model->scope = [];
                $n1 = 0;
                foreach ($map['Scope'] as $item1) {
                    $model->scope[$n1++] = $item1;
                }
            }
        }

        if (isset($map['SophonTaskId'])) {
            $model->sophonTaskId = $map['SophonTaskId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubAliuid'])) {
            $model->subAliuid = $map['SubAliuid'];
        }

        if (isset($map['TaskParam'])) {
            $model->taskParam = $map['TaskParam'];
        }

        if (isset($map['TaskUrl'])) {
            $model->taskUrl = $map['TaskUrl'];
        }

        return $model;
    }
}
