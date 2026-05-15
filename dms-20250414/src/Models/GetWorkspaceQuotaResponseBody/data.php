<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\GetWorkspaceQuotaResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $cuQuota;

    /**
     * @var int
     */
    public $cuQuotaUsage;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $notebookFreeQuotaAvailable;

    /**
     * @var int
     */
    public $notebookFreeQuotaTotal;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'cuQuota' => 'CuQuota',
        'cuQuotaUsage' => 'CuQuotaUsage',
        'instanceId' => 'InstanceId',
        'notebookFreeQuotaAvailable' => 'NotebookFreeQuotaAvailable',
        'notebookFreeQuotaTotal' => 'NotebookFreeQuotaTotal',
        'status' => 'Status',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cuQuota) {
            $res['CuQuota'] = $this->cuQuota;
        }

        if (null !== $this->cuQuotaUsage) {
            $res['CuQuotaUsage'] = $this->cuQuotaUsage;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->notebookFreeQuotaAvailable) {
            $res['NotebookFreeQuotaAvailable'] = $this->notebookFreeQuotaAvailable;
        }

        if (null !== $this->notebookFreeQuotaTotal) {
            $res['NotebookFreeQuotaTotal'] = $this->notebookFreeQuotaTotal;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['CuQuota'])) {
            $model->cuQuota = $map['CuQuota'];
        }

        if (isset($map['CuQuotaUsage'])) {
            $model->cuQuotaUsage = $map['CuQuotaUsage'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NotebookFreeQuotaAvailable'])) {
            $model->notebookFreeQuotaAvailable = $map['NotebookFreeQuotaAvailable'];
        }

        if (isset($map['NotebookFreeQuotaTotal'])) {
            $model->notebookFreeQuotaTotal = $map['NotebookFreeQuotaTotal'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
