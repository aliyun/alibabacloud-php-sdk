<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models\ListCertWarehouseResponseBody;

use AlibabaCloud\Tea\Model;

class certWarehouseList extends Model
{
    /**
     * @example 1665819958000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 14dcc8afc7578e1f
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example false
     *
     * @var bool
     */
    public $isExpired;

    /**
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @example 14dcc8afc7578e1f
     *
     * @var string
     */
    public $pcaInstanceId;

    /**
     * @example 10
     *
     * @var int
     */
    public $qps;

    /**
     * @example aliyunPCA
     *
     * @var string
     */
    public $type;

    /**
     * @example 1
     *
     * @var int
     */
    public $whId;
    protected $_name = [
        'endTime'       => 'EndTime',
        'instanceId'    => 'InstanceId',
        'isExpired'     => 'IsExpired',
        'name'          => 'Name',
        'pcaInstanceId' => 'PcaInstanceId',
        'qps'           => 'Qps',
        'type'          => 'Type',
        'whId'          => 'WhId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isExpired) {
            $res['IsExpired'] = $this->isExpired;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pcaInstanceId) {
            $res['PcaInstanceId'] = $this->pcaInstanceId;
        }
        if (null !== $this->qps) {
            $res['Qps'] = $this->qps;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->whId) {
            $res['WhId'] = $this->whId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return certWarehouseList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsExpired'])) {
            $model->isExpired = $map['IsExpired'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PcaInstanceId'])) {
            $model->pcaInstanceId = $map['PcaInstanceId'];
        }
        if (isset($map['Qps'])) {
            $model->qps = $map['Qps'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WhId'])) {
            $model->whId = $map['WhId'];
        }

        return $model;
    }
}
