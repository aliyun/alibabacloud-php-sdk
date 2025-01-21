<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Dara\Model;

class GetServiceRequest extends Model
{
    /**
     * @var bool
     */
    public $filterAliUid;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $serviceId;
    /**
     * @var string
     */
    public $serviceInstanceId;
    /**
     * @var string
     */
    public $serviceName;
    /**
     * @var string
     */
    public $serviceVersion;
    /**
     * @var string
     */
    public $sharedAccountType;
    /**
     * @var string[]
     */
    public $showDetail;
    protected $_name = [
        'filterAliUid'      => 'FilterAliUid',
        'regionId'          => 'RegionId',
        'serviceId'         => 'ServiceId',
        'serviceInstanceId' => 'ServiceInstanceId',
        'serviceName'       => 'ServiceName',
        'serviceVersion'    => 'ServiceVersion',
        'sharedAccountType' => 'SharedAccountType',
        'showDetail'        => 'ShowDetail',
    ];

    public function validate()
    {
        if (\is_array($this->showDetail)) {
            Model::validateArray($this->showDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filterAliUid) {
            $res['FilterAliUid'] = $this->filterAliUid;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }

        if (null !== $this->sharedAccountType) {
            $res['SharedAccountType'] = $this->sharedAccountType;
        }

        if (null !== $this->showDetail) {
            if (\is_array($this->showDetail)) {
                $res['ShowDetail'] = [];
                $n1                = 0;
                foreach ($this->showDetail as $item1) {
                    $res['ShowDetail'][$n1++] = $item1;
                }
            }
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
        if (isset($map['FilterAliUid'])) {
            $model->filterAliUid = $map['FilterAliUid'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }

        if (isset($map['SharedAccountType'])) {
            $model->sharedAccountType = $map['SharedAccountType'];
        }

        if (isset($map['ShowDetail'])) {
            if (!empty($map['ShowDetail'])) {
                $model->showDetail = [];
                $n1                = 0;
                foreach ($map['ShowDetail'] as $item1) {
                    $model->showDetail[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
