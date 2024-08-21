<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class UpdateDeploymentJobRequest extends Model
{
    /**
     * @description The ID of the certificate. Separate multiple certificate IDs with commas (,). You can call the [ListUserCertificateOrder](https://help.aliyun.com/document_detail/455804.html) operation to obtain the ID of a certificate from the **CertificateId** parameter.
     *
     * @example 9957285,12067351,12304338,12342649
     *
     * @var string
     */
    public $certIds;

    /**
     * @description The ID of the contact. Separate multiple contact IDs with commas (,). You can call the [ListContact](https://help.aliyun.com/document_detail/2712221.html) operation to obtain the ID of a contact from the **ContactId** parameter.
     *
     * @example 9957285,12067351,12304338,12342649
     *
     * @var string
     */
    public $contactIds;

    /**
     * @description The ID of the deployment task. You can call the [CreateDeploymentJob](https://help.aliyun.com/document_detail/2712234.html) operation to obtain the ID of a deployment task from the JobId parameter. You can also call the [ListDeploymentJob](https://help.aliyun.com/document_detail/2712223.html) operation to obtain the ID of a deployment task.
     *
     * This parameter is required.
     * @example 8888
     *
     * @var int
     */
    public $jobId;

    /**
     * @description The name of the deployment task.
     *
     * @example cert-1
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the cloud resource. Separate multiple resource IDs with commas (,). You can call the [ListCloudResources](https://help.aliyun.com/document_detail/2712230.html) operation to obtain the ID of a cloud resource from the **Id** parameter.
     *
     * @example 9957285,12067351,12304338,12342649
     *
     * @var string
     */
    public $resourceIds;

    /**
     * @description The time when the task starts. The value is a UNIX timestamp. If you do not specify this parameter, the system immediately starts the task after it is created.
     *
     * @example 1606482979000
     *
     * @var int
     */
    public $scheduleTime;
    protected $_name = [
        'certIds'      => 'CertIds',
        'contactIds'   => 'ContactIds',
        'jobId'        => 'JobId',
        'name'         => 'Name',
        'resourceIds'  => 'ResourceIds',
        'scheduleTime' => 'ScheduleTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certIds) {
            $res['CertIds'] = $this->certIds;
        }
        if (null !== $this->contactIds) {
            $res['ContactIds'] = $this->contactIds;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }
        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDeploymentJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertIds'])) {
            $model->certIds = $map['CertIds'];
        }
        if (isset($map['ContactIds'])) {
            $model->contactIds = $map['ContactIds'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceIds'])) {
            $model->resourceIds = $map['ResourceIds'];
        }
        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }

        return $model;
    }
}
