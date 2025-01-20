<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataArchiveOrderDetailResponseBody\dataArchiveOrderDetail\pluginExtraData;

use AlibabaCloud\Dara\Model;

class dagInfo extends Model
{
    /**
     * @var string
     */
    public $creatorId;
    /**
     * @var string
     */
    public $cronBeginDate;
    /**
     * @var string
     */
    public $cronEndDate;
    /**
     * @var bool
     */
    public $cronTrigger;
    /**
     * @var bool
     */
    public $DWDevelop;
    /**
     * @var string
     */
    public $dagName;
    /**
     * @var string
     */
    public $dagOwnerId;
    /**
     * @var int
     */
    public $deployId;
    /**
     * @var string
     */
    public $description;
    /**
     * @var int
     */
    public $editDagId;
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
     * @var int
     */
    public $isPublic;
    /**
     * @var bool
     */
    public $legacy;
    /**
     * @var bool
     */
    public $system;
    /**
     * @var string
     */
    public $tenantId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
