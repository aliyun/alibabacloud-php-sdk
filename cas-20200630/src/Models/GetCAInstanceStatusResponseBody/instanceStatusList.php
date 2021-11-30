<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models\GetCAInstanceStatusResponseBody;

use AlibabaCloud\Tea\Model;

class instanceStatusList extends Model
{
    /**
     * @var int
     */
    public $afterTime;

    /**
     * @var int
     */
    public $beforeTime;

    /**
     * @var int
     */
    public $certIssuedCount;

    /**
     * @var int
     */
    public $certTotalCount;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $useExpireTime;
    protected $_name = [
        'afterTime'       => 'AfterTime',
        'beforeTime'      => 'BeforeTime',
        'certIssuedCount' => 'CertIssuedCount',
        'certTotalCount'  => 'CertTotalCount',
        'identifier'      => 'Identifier',
        'instanceId'      => 'InstanceId',
        'status'          => 'Status',
        'type'            => 'Type',
        'useExpireTime'   => 'UseExpireTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->afterTime) {
            $res['AfterTime'] = $this->afterTime;
        }
        if (null !== $this->beforeTime) {
            $res['BeforeTime'] = $this->beforeTime;
        }
        if (null !== $this->certIssuedCount) {
            $res['CertIssuedCount'] = $this->certIssuedCount;
        }
        if (null !== $this->certTotalCount) {
            $res['CertTotalCount'] = $this->certTotalCount;
        }
        if (null !== $this->identifier) {
            $res['Identifier'] = $this->identifier;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->useExpireTime) {
            $res['UseExpireTime'] = $this->useExpireTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceStatusList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AfterTime'])) {
            $model->afterTime = $map['AfterTime'];
        }
        if (isset($map['BeforeTime'])) {
            $model->beforeTime = $map['BeforeTime'];
        }
        if (isset($map['CertIssuedCount'])) {
            $model->certIssuedCount = $map['CertIssuedCount'];
        }
        if (isset($map['CertTotalCount'])) {
            $model->certTotalCount = $map['CertTotalCount'];
        }
        if (isset($map['Identifier'])) {
            $model->identifier = $map['Identifier'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UseExpireTime'])) {
            $model->useExpireTime = $map['UseExpireTime'];
        }

        return $model;
    }
}
