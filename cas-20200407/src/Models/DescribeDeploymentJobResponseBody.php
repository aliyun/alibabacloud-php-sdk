<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cas\V20200407\Models\DescribeDeploymentJobResponseBody\casContacts;

class DescribeDeploymentJobResponseBody extends Model
{
    /**
     * @var casContacts[]
     */
    public $casContacts;
    /**
     * @var string
     */
    public $certDomain;
    /**
     * @var string
     */
    public $certType;
    /**
     * @var string
     */
    public $config;
    /**
     * @var int
     */
    public $del;
    /**
     * @var string
     */
    public $endTime;
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
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $jobType;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $productName;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $rollback;
    /**
     * @var string
     */
    public $scheduleTime;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var string
     */
    public $status;
    /**
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
        if (\is_array($this->casContacts)) {
            Model::validateArray($this->casContacts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->casContacts) {
            if (\is_array($this->casContacts)) {
                $res['CasContacts'] = [];
                $n1                 = 0;
                foreach ($this->casContacts as $item1) {
                    $res['CasContacts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasContacts'])) {
            if (!empty($map['CasContacts'])) {
                $model->casContacts = [];
                $n1                 = 0;
                foreach ($map['CasContacts'] as $item1) {
                    $model->casContacts[$n1++] = casContacts::fromMap($item1);
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
