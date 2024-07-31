<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListDeploymentsResponseBody\data;

use AlibabaCloud\Tea\Model;

class deployments extends Model
{
    /**
     * @description The time when the deployment package was created.
     *
     * @example 1593877765000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The ID of the Alibaba Cloud account used by the user who created the deployment package.
     *
     * @example 2003****
     *
     * @var string
     */
    public $creator;

    /**
     * @description The error message returned when the deployment package failed.
     *
     * @example OK
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The time when the deployment package was run. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1593877765000
     *
     * @var int
     */
    public $executeTime;

    /**
     * @description The ID of the Alibaba Cloud account used by the user who ran the deployment package.
     *
     * @example 2003****
     *
     * @var string
     */
    public $executor;

    /**
     * @description The deployment package ID. You can call the [GetDeployment](https://help.aliyun.com/document_detail/173950.html) operation to obtain the ID.
     *
     * @example 11111
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the deployment package.
     *
     * @example auto_created
     *
     * @var string
     */
    public $name;

    /**
     * @description The status of the deployment package. Valid values:
     *
     *   0: The deployment package is ready.
     *   1: The deployment package is deployed.
     *   2: The deployment package fails to be deployed.
     *   6: The deployment package is rejected.
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'creator'      => 'Creator',
        'errorMessage' => 'ErrorMessage',
        'executeTime'  => 'ExecuteTime',
        'executor'     => 'Executor',
        'id'           => 'Id',
        'name'         => 'Name',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->executor) {
            $res['Executor'] = $this->executor;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['Executor'])) {
            $model->executor = $map['Executor'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
