<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\SDK\Cas\V20200407\Models\DescribeDeploymentJobResponseBody\casContacts;
use AlibabaCloud\Tea\Model;

class DescribeDeploymentJobResponseBody extends Model
{
    /**
     * @description The information about the contact.
     *
     * @var casContacts[]
     */
    public $casContacts;

    /**
     * @description The domain names bound to the certificate of the deployment task.
     *
     * @example example.aliyundoc.com,demo.aliyundoc.com
     *
     * @var string
     */
    public $certDomain;

    /**
     * @description The type of the certificate. Valid values:
     *
     *   **upload**: uploaded certificate
     *   **buy**: purchased certificate
     *   **free**: free certificate available only on the China site (aliyun.com)
     *
     * @example buy
     *
     * @var string
     */
    public $certType;

    /**
     * @description The configurations of the deployment task.
     *
     * @example {\\"shareCertIds\\":[],\\"certIds\\":[12342649,12304338,12067351,9957285]}
     *
     * @var string
     */
    public $config;

    /**
     * @description Indicates whether the deployment job was deleted. Valid values:
     *
     *   **0**: not deleted
     *   **1**: deleted
     *
     * @example 1
     *
     * @var int
     */
    public $del;

    /**
     * @description The end time of the deployment job. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1679541809000
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The time when the deployment job was created. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1679541809000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the deployment job was last modified. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1679541809000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the deployment job.
     *
     * @example 8888
     *
     * @var int
     */
    public $id;

    /**
     * @description The instance ID of the deployment task.
     *
     * @example 14dcc8afc7578e1f
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the deployment job. Valid values:
     *
     *   **cloud**: multi-cloud deployment job.
     *   **trustee**: hosted deployment job available only on the China site (aliyun.com).
     *   **user**: cloud service deployment job. The cloud server is not included.
     *
     * @example user
     *
     * @var string
     */
    public $jobType;

    /**
     * @description The name of the deployment task.
     *
     * @example auto-test-AXX
     *
     * @var string
     */
    public $name;

    /**
     * @description The cloud services included in the deployment task.
     *
     * @example CDN
     *
     * @var string
     */
    public $productName;

    /**
     * @description The request ID.
     *
     * @example 15C66C7B-671A-4297-9187-2C4477247A74
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the deployment job includes the rollback worker. For example, if a cloud service in a deployment job has been rolled back, **1** is returned. Valid values:
     *
     *   **0**: The rollback worker is not included.
     *   **1**: The rollback worker is included.
     *
     * @example 1
     *
     * @var int
     */
    public $rollback;

    /**
     * @description The time when the deployment job was scheduled. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1678083209335
     *
     * @var string
     */
    public $scheduleTime;

    /**
     * @description The start time of the deployment job. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1679541809000
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The status of the deployment job. Valid values:
     *
     *   **pending**
     *   **editing**
     *   **scheduling**
     *   **processing**
     *   **error**
     *   **success**
     *
     * @example editing
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the Alibaba Cloud account in which the deployment job is created.
     *
     * @example 166688437XXXX785
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'casContacts'  => 'CasContacts',
        'certDomain'   => 'CertDomain',
        'certType'     => 'CertType',
        'config'       => 'Config',
        'del'          => 'Del',
        'endTime'      => 'EndTime',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'id'           => 'Id',
        'instanceId'   => 'InstanceId',
        'jobType'      => 'JobType',
        'name'         => 'Name',
        'productName'  => 'ProductName',
        'requestId'    => 'RequestId',
        'rollback'     => 'Rollback',
        'scheduleTime' => 'ScheduleTime',
        'startTime'    => 'StartTime',
        'status'       => 'Status',
        'userId'       => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->casContacts) {
            $res['CasContacts'] = [];
            if (null !== $this->casContacts && \is_array($this->casContacts)) {
                $n = 0;
                foreach ($this->casContacts as $item) {
                    $res['CasContacts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->certDomain) {
            $res['CertDomain'] = $this->certDomain;
        }
        if (null !== $this->certType) {
            $res['CertType'] = $this->certType;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->del) {
            $res['Del'] = $this->del;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->rollback) {
            $res['Rollback'] = $this->rollback;
        }
        if (null !== $this->scheduleTime) {
            $res['ScheduleTime'] = $this->scheduleTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDeploymentJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasContacts'])) {
            if (!empty($map['CasContacts'])) {
                $model->casContacts = [];
                $n                  = 0;
                foreach ($map['CasContacts'] as $item) {
                    $model->casContacts[$n++] = null !== $item ? casContacts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CertDomain'])) {
            $model->certDomain = $map['CertDomain'];
        }
        if (isset($map['CertType'])) {
            $model->certType = $map['CertType'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Del'])) {
            $model->del = $map['Del'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Rollback'])) {
            $model->rollback = $map['Rollback'];
        }
        if (isset($map['ScheduleTime'])) {
            $model->scheduleTime = $map['ScheduleTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
