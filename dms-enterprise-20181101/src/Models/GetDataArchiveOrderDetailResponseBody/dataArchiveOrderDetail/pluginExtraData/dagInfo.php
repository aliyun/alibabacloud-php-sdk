<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginExtraData;

use AlibabaCloud\Tea\Model;

class dagInfo extends Model
{
    /**
     * @description The ID of the user who created the task flow.
     *
     * @example 59****
     *
     * @var string
     */
    public $creatorId;

    /**
     * @description The start time for scheduling. The task flow is not scheduled before this point in time.
     *
     * @example 1970-01-01
     *
     * @var string
     */
    public $cronBeginDate;

    /**
     * @description The end time for scheduling. The task flow is not scheduled after this point in time.
     *
     * @example 9999-01-01
     *
     * @var string
     */
    public $cronEndDate;

    /**
     * @description Indicates whether the archiving task is a scheduled task. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $cronTrigger;

    /**
     * @description Indicates whether the task is used to develop warehouses.
     *
     * >  This field is a retained field that is not in use.
     * @example false
     *
     * @var bool
     */
    public $DWDevelop;

    /**
     * @description The name of the workflow.
     *
     * @example data-archive-9099197
     *
     * @var string
     */
    public $dagName;

    /**
     * @description The ID of the owner of the workflow.
     *
     * @example 13****
     *
     * @var string
     */
    public $dagOwnerId;

    /**
     * @description The ID of the deployment record.
     *
     * @example 93***
     *
     * @var int
     */
    public $deployId;

    /**
     * @description The description of the workflow.
     *
     * @example order id:9099197
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the editable workflow version.
     *
     * @example 24***
     *
     * @var int
     */
    public $editDagId;

    /**
     * @description The time when the workflow was created.
     *
     * @example 2023-05-15 16:00:48
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the workflow was last modified.
     *
     * @example 2023-06-15 16:00:48
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the task flow.
     *
     * @example 24***
     *
     * @var int
     */
    public $id;

    /**
     * @description Indicates whether the workflow is public. Valid values:
     *
     *   **0**: not public.
     *   **1**: public.
     *
     * @example 0
     *
     * @var int
     */
    public $isPublic;

    /**
     * @description Indicates whether the task is a historical task. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $legacy;

    /**
     * @description Indicates whether the task was created by the system. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $system;

    /**
     * @description The tenant ID.
     *
     * @example 5***
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description Indicates whether the workflow is triggered to run once. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $triggerOnce;
    protected $_name = [
        'creatorId'     => 'CreatorId',
        'cronBeginDate' => 'CronBeginDate',
        'cronEndDate'   => 'CronEndDate',
        'cronTrigger'   => 'CronTrigger',
        'DWDevelop'     => 'DWDevelop',
        'dagName'       => 'DagName',
        'dagOwnerId'    => 'DagOwnerId',
        'deployId'      => 'DeployId',
        'description'   => 'Description',
        'editDagId'     => 'EditDagId',
        'gmtCreate'     => 'GmtCreate',
        'gmtModified'   => 'GmtModified',
        'id'            => 'Id',
        'isPublic'      => 'IsPublic',
        'legacy'        => 'Legacy',
        'system'        => 'System',
        'tenantId'      => 'TenantId',
        'triggerOnce'   => 'TriggerOnce',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->cronBeginDate) {
            $res['CronBeginDate'] = $this->cronBeginDate;
        }
        if (null !== $this->cronEndDate) {
            $res['CronEndDate'] = $this->cronEndDate;
        }
        if (null !== $this->cronTrigger) {
            $res['CronTrigger'] = $this->cronTrigger;
        }
        if (null !== $this->DWDevelop) {
            $res['DWDevelop'] = $this->DWDevelop;
        }
        if (null !== $this->dagName) {
            $res['DagName'] = $this->dagName;
        }
        if (null !== $this->dagOwnerId) {
            $res['DagOwnerId'] = $this->dagOwnerId;
        }
        if (null !== $this->deployId) {
            $res['DeployId'] = $this->deployId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->editDagId) {
            $res['EditDagId'] = $this->editDagId;
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
        if (null !== $this->isPublic) {
            $res['IsPublic'] = $this->isPublic;
        }
        if (null !== $this->legacy) {
            $res['Legacy'] = $this->legacy;
        }
        if (null !== $this->system) {
            $res['System'] = $this->system;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->triggerOnce) {
            $res['TriggerOnce'] = $this->triggerOnce;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dagInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['CronBeginDate'])) {
            $model->cronBeginDate = $map['CronBeginDate'];
        }
        if (isset($map['CronEndDate'])) {
            $model->cronEndDate = $map['CronEndDate'];
        }
        if (isset($map['CronTrigger'])) {
            $model->cronTrigger = $map['CronTrigger'];
        }
        if (isset($map['DWDevelop'])) {
            $model->DWDevelop = $map['DWDevelop'];
        }
        if (isset($map['DagName'])) {
            $model->dagName = $map['DagName'];
        }
        if (isset($map['DagOwnerId'])) {
            $model->dagOwnerId = $map['DagOwnerId'];
        }
        if (isset($map['DeployId'])) {
            $model->deployId = $map['DeployId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EditDagId'])) {
            $model->editDagId = $map['EditDagId'];
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
        if (isset($map['IsPublic'])) {
            $model->isPublic = $map['IsPublic'];
        }
        if (isset($map['Legacy'])) {
            $model->legacy = $map['Legacy'];
        }
        if (isset($map['System'])) {
            $model->system = $map['System'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['TriggerOnce'])) {
            $model->triggerOnce = $map['TriggerOnce'];
        }

        return $model;
    }
}
