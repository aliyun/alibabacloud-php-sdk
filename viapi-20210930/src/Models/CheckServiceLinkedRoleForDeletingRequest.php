<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapi\V20210930\Models;

use AlibabaCloud\Tea\Model;

class CheckServiceLinkedRoleForDeletingRequest extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $deletionTaskId;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $SPIRegionId;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'accountId'      => 'AccountId',
        'deletionTaskId' => 'DeletionTaskId',
        'roleArn'        => 'RoleArn',
        'SPIRegionId'    => 'SPIRegionId',
        'serviceName'    => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->deletionTaskId) {
            $res['DeletionTaskId'] = $this->deletionTaskId;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->SPIRegionId) {
            $res['SPIRegionId'] = $this->SPIRegionId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckServiceLinkedRoleForDeletingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['DeletionTaskId'])) {
            $model->deletionTaskId = $map['DeletionTaskId'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['SPIRegionId'])) {
            $model->SPIRegionId = $map['SPIRegionId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
