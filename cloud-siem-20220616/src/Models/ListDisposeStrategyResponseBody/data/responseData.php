<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDisposeStrategyResponseBody\data;

use AlibabaCloud\Tea\Model;

class responseData extends Model
{
    /**
     * @description The UUID of the alert.
     *
     * @example sas_71e24437d2797ce8fc59692905a4****
     *
     * @var string
     */
    public $alertUuid;

    /**
     * @description The ID of the Alibaba Cloud account that is associated with the policy in SIEM.
     *
     * @example 127608589417****
     *
     * @var int
     */
    public $aliuid;

    /**
     * @description The status of the policy. Valid values:
     *
     *   0: invalid
     *   1: valid
     *
     * @example 0
     *
     * @var int
     */
    public $effectiveStatus;

    /**
     * @description The details of the entity. The value is a JSON array.
     *
     * @example [{"ip":"1.1.1.1"}]
     *
     * @var mixed[]
     */
    public $entity;

    /**
     * @description The ID of the entity.
     *
     * @example 123456789
     *
     * @var int
     */
    public $entityId;

    /**
     * @description The type of the entity. Valid values:
     *
     *   ip
     *   process
     *   file
     *
     * @example ip
     *
     * @var string
     */
    public $entityType;

    /**
     * @description The summary information about the failed task.
     *
     * @example DisposalEntity failed which description is Aegis Quarantine File , return_info failed which description is Check Aegis Process Result , [ERROR DETAIL] *******.php:file not found
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The end time of the task.
     *
     * @example 2021-08-10 21:34:07
     *
     * @var string
     */
    public $finishTime;

    /**
     * @description The creation time.
     *
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The update time.
     *
     * @example 2021-01-06 16:37:29
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the policy.
     *
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the event.
     *
     * @example Multiple type of alerts, including Miner Network, Command line download and run malicious files, Backdoor Process, etc
     *
     * @var string
     */
    public $incidentName;

    /**
     * @description The UUID of the event.
     *
     * @example 85ea4241-798f-4684-a876-65d4f0c3****
     *
     * @var string
     */
    public $incidentUuid;

    /**
     * @description The name of the playbook, which is the unique identifier of the playbook.
     *
     * @example WafBlockIP
     *
     * @var string
     */
    public $playbookName;

    /**
     * @description The type of the playbook. Valid values:
     *
     *   system: user-triggered playbook
     *   custom: event-triggered playbook
     *   custom_alert: alert-triggered playbook
     *   soar-manual: user-run playbook
     *   soar-mdr: MDR-run playbook
     *
     * @example system
     *
     * @var string
     */
    public $playbookType;

    /**
     * @description The UUID of the playbook.
     *
     * @example system_aliyun_clb_process_book
     *
     * @var string
     */
    public $playbookUuid;

    /**
     * @description The scope of the policy.
     *
     * @example [{ aliUid: 1766185894104675 }]
     *
     * @var mixed[]
     */
    public $scope;

    /**
     * @description The ID of the SOAR handling policy.
     *
     * @example 577bbf90-a770-44a7-8154-586aa2d318fa
     *
     * @var string
     */
    public $sophonTaskId;

    /**
     * @description The running status of the playbook. Valid values:
     *
     *   200: successful
     *   10: deleted
     *   5: failed
     *   0: initial
     *
     * @example 10
     *
     * @var int
     */
    public $status;

    /**
     * @description The ID of the Alibaba account that is used to configure the policy.
     *
     * @example 176555323***
     *
     * @var int
     */
    public $subAliuid;

    /**
     * @description The parameters that are used to trigger the playbook. The value is in the JSON format.
     *
     * @example {
     * "os_type": "linux",
     * "entity_id": "5f58ef67-8803-4314-8d67-c87dc92b****",
     * "host_uuid": "5f58ef67-8803-4314-8d67-c87dc92b****",
     * "cloudCode": "aliyun",
     * "alertId": "89416745494****"
     * {
     * "aliUid": 1766185894104****
     * }
     * @var string
     */
    public $taskParam;
    protected $_name = [
        'alertUuid'       => 'AlertUuid',
        'aliuid'          => 'Aliuid',
        'effectiveStatus' => 'EffectiveStatus',
        'entity'          => 'Entity',
        'entityId'        => 'EntityId',
        'entityType'      => 'EntityType',
        'errorMessage'    => 'ErrorMessage',
        'finishTime'      => 'FinishTime',
        'gmtCreate'       => 'GmtCreate',
        'gmtModified'     => 'GmtModified',
        'id'              => 'Id',
        'incidentName'    => 'IncidentName',
        'incidentUuid'    => 'IncidentUuid',
        'playbookName'    => 'PlaybookName',
        'playbookType'    => 'PlaybookType',
        'playbookUuid'    => 'PlaybookUuid',
        'scope'           => 'Scope',
        'sophonTaskId'    => 'SophonTaskId',
        'status'          => 'Status',
        'subAliuid'       => 'SubAliuid',
        'taskParam'       => 'TaskParam',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Entity'] = $this->entity;
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
            $res['Scope'] = $this->scope;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return responseData
     */
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
                $model->entity = $map['Entity'];
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
                $model->scope = $map['Scope'];
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

        return $model;
    }
}
