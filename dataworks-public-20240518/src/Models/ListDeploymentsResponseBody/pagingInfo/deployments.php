<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDeploymentsResponseBody\pagingInfo;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDeploymentsResponseBody\pagingInfo\deployments\stages;
use AlibabaCloud\Tea\Model;

class deployments extends Model
{
    /**
     * @description The time when the process was created. This value is a UNIX timestamp.
     *
     * @example 1702736654000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the user who creates the process.
     *
     * @example 110755000425XXXX
     *
     * @var string
     */
    public $creator;

    /**
     * @description The process ID.
     *
     * @example ddf354a5-03df-48fc-94c1-cc973f79XXXX
     *
     * @var string
     */
    public $id;

    /**
     * @description The error message returned if the process fails.
     *
     * @example Error message
     *
     * @var string
     */
    public $message;

    /**
     * @description The time when the process was last modified. This value is a UNIX timestamp.
     *
     * @example 1702736654000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description The DataWorks workspace ID.
     *
     * @example 44683
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The stages of the process.
     *
     * @var stages[]
     */
    public $stages;

    /**
     * @description The status of the process.
     *
     * Valid values:
     *
     *   Init
     *   Running
     *   Success
     *   Fail
     *   Termination
     *   Cancel
     *
     * @example RUNNING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'id' => 'Id',
        'message' => 'Message',
        'modifyTime' => 'ModifyTime',
        'projectId' => 'ProjectId',
        'stages' => 'Stages',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->stages) {
            $res['Stages'] = [];
            if (null !== $this->stages && \is_array($this->stages)) {
                $n = 0;
                foreach ($this->stages as $item) {
                    $res['Stages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deployments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Stages'])) {
            if (!empty($map['Stages'])) {
                $model->stages = [];
                $n = 0;
                foreach ($map['Stages'] as $item) {
                    $model->stages[$n++] = null !== $item ? stages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
