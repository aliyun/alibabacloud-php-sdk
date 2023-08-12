<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class GetServiceRequest extends Model
{
    /**
     * @var bool
     */
    public $filterAliUid;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example service-4ee86df83fd948******
     *
     * @var string
     */
    public $serviceId;

    /**
     * @example 1
     *
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
        'serviceVersion'    => 'ServiceVersion',
        'sharedAccountType' => 'SharedAccountType',
        'showDetail'        => 'ShowDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }
        if (null !== $this->sharedAccountType) {
            $res['SharedAccountType'] = $this->sharedAccountType;
        }
        if (null !== $this->showDetail) {
            $res['ShowDetail'] = $this->showDetail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceRequest
     */
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
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }
        if (isset($map['SharedAccountType'])) {
            $model->sharedAccountType = $map['SharedAccountType'];
        }
        if (isset($map['ShowDetail'])) {
            if (!empty($map['ShowDetail'])) {
                $model->showDetail = $map['ShowDetail'];
            }
        }

        return $model;
    }
}
