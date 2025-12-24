<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribePlaybooksResponseBody;

use AlibabaCloud\Dara\Model;

class playbooks extends Model
{
    /**
     * @var int
     */
    public $active;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $lastRuntime;

    /**
     * @var string
     */
    public $ownType;

    /**
     * @var string
     */
    public $paramType;

    /**
     * @var string
     */
    public $playbookUuid;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'active' => 'Active',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'lastRuntime' => 'LastRuntime',
        'ownType' => 'OwnType',
        'paramType' => 'ParamType',
        'playbookUuid' => 'PlaybookUuid',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->lastRuntime) {
            $res['LastRuntime'] = $this->lastRuntime;
        }

        if (null !== $this->ownType) {
            $res['OwnType'] = $this->ownType;
        }

        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
        }

        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['LastRuntime'])) {
            $model->lastRuntime = $map['LastRuntime'];
        }

        if (isset($map['OwnType'])) {
            $model->ownType = $map['OwnType'];
        }

        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }

        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
