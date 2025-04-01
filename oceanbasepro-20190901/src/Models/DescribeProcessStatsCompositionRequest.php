<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class DescribeProcessStatsCompositionRequest extends Model
{
    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $serverIp;

    /**
     * @var string
     */
    public $sqlText;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $UId;

    /**
     * @var string
     */
    public $users;
    protected $_name = [
        'clientIp' => 'ClientIp',
        'instanceId' => 'InstanceId',
        'serverIp' => 'ServerIp',
        'sqlText' => 'SqlText',
        'status' => 'Status',
        'tenantId' => 'TenantId',
        'UId' => 'UId',
        'users' => 'Users',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }

        if (null !== $this->sqlText) {
            $res['SqlText'] = $this->sqlText;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->UId) {
            $res['UId'] = $this->UId;
        }

        if (null !== $this->users) {
            $res['Users'] = $this->users;
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
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }

        if (isset($map['SqlText'])) {
            $model->sqlText = $map['SqlText'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['UId'])) {
            $model->UId = $map['UId'];
        }

        if (isset($map['Users'])) {
            $model->users = $map['Users'];
        }

        return $model;
    }
}
