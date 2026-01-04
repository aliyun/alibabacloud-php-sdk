<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class ListApplicationsRequest extends Model
{
    /**
     * @var string
     */
    public $applicationCreationType;

    /**
     * @var string[]
     */
    public $applicationIds;

    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var string
     */
    public $authorizationType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $m2MClientStatus;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resourceServerStatus;

    /**
     * @var string
     */
    public $ssoType;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'applicationCreationType' => 'ApplicationCreationType',
        'applicationIds' => 'ApplicationIds',
        'applicationName' => 'ApplicationName',
        'authorizationType' => 'AuthorizationType',
        'instanceId' => 'InstanceId',
        'm2MClientStatus' => 'M2MClientStatus',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'resourceServerStatus' => 'ResourceServerStatus',
        'ssoType' => 'SsoType',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->applicationIds)) {
            Model::validateArray($this->applicationIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationCreationType) {
            $res['ApplicationCreationType'] = $this->applicationCreationType;
        }

        if (null !== $this->applicationIds) {
            if (\is_array($this->applicationIds)) {
                $res['ApplicationIds'] = [];
                $n1 = 0;
                foreach ($this->applicationIds as $item1) {
                    $res['ApplicationIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        if (null !== $this->authorizationType) {
            $res['AuthorizationType'] = $this->authorizationType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->m2MClientStatus) {
            $res['M2MClientStatus'] = $this->m2MClientStatus;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->resourceServerStatus) {
            $res['ResourceServerStatus'] = $this->resourceServerStatus;
        }

        if (null !== $this->ssoType) {
            $res['SsoType'] = $this->ssoType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ApplicationCreationType'])) {
            $model->applicationCreationType = $map['ApplicationCreationType'];
        }

        if (isset($map['ApplicationIds'])) {
            if (!empty($map['ApplicationIds'])) {
                $model->applicationIds = [];
                $n1 = 0;
                foreach ($map['ApplicationIds'] as $item1) {
                    $model->applicationIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        if (isset($map['AuthorizationType'])) {
            $model->authorizationType = $map['AuthorizationType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['M2MClientStatus'])) {
            $model->m2MClientStatus = $map['M2MClientStatus'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ResourceServerStatus'])) {
            $model->resourceServerStatus = $map['ResourceServerStatus'];
        }

        if (isset($map['SsoType'])) {
            $model->ssoType = $map['SsoType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
