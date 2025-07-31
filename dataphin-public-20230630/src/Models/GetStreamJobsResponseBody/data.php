<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetStreamJobsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example DEV
     *
     * @var string
     */
    public $env;

    /**
     * @example 716555
     *
     * @var int
     */
    public $id;

    /**
     * @example flink_order_detail
     *
     * @var string
     */
    public $jobName;

    /**
     * @example 300006788
     *
     * @var string
     */
    public $modifierId;

    /**
     * @example 300006788
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example 7162269257990111
     *
     * @var string
     */
    public $projectId;

    /**
     * @example 0
     *
     * @var string
     */
    public $status;

    /**
     * @example FLINK_SQL
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'env' => 'Env',
        'id' => 'Id',
        'jobName' => 'JobName',
        'modifierId' => 'ModifierId',
        'ownerId' => 'OwnerId',
        'projectId' => 'ProjectId',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->jobName) {
            $res['JobName'] = $this->jobName;
        }
        if (null !== $this->modifierId) {
            $res['ModifierId'] = $this->modifierId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['JobName'])) {
            $model->jobName = $map['JobName'];
        }
        if (isset($map['ModifierId'])) {
            $model->modifierId = $map['ModifierId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
