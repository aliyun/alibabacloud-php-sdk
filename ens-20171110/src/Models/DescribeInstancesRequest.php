<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstancesRequest extends Model
{
    /**
     * @example cn-beijing-cmcc
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @example ["cn-suzhou-telecom","cn-chengdu-telecom"]
     *
     * @var string
     */
    public $ensRegionIds;

    /**
     * @example ens-20190730202316s****
     *
     * @var string
     */
    public $ensServiceId;

    /**
     * @example centos_6_08_64_20G_alibase_****
     *
     * @var string
     */
    public $imageId;

    /**
     * @example i-5iqczfxps7csjrxeca****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example ["i-5iqczfxps7csjrxeca07****", "i-5iqczfxps7csjrxeca07****"]]
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @example TestName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example EnsService
     *
     * @var string
     */
    public $instanceResourceType;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @example n-2zeuphj08tt7q3brd****
     *
     * @var string
     */
    public $networkId;

    /**
     * @example {"InstanceNameSort":"asc","ExpireTimeSort":"asc","CreationTimeSort":"desc"}}
     *
     * @var string
     */
    public $orderByParams;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example Joshua
     *
     * @var string
     */
    public $searchKey;

    /**
     * @example sg-5kyicq2kfcapxrdds6tar7jqb
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example vsw-2zeh0r1pabwtg6wcs****
     *
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'ensRegionId'          => 'EnsRegionId',
        'ensRegionIds'         => 'EnsRegionIds',
        'ensServiceId'         => 'EnsServiceId',
        'imageId'              => 'ImageId',
        'instanceId'           => 'InstanceId',
        'instanceIds'          => 'InstanceIds',
        'instanceName'         => 'InstanceName',
        'instanceResourceType' => 'InstanceResourceType',
        'intranetIp'           => 'IntranetIp',
        'networkId'            => 'NetworkId',
        'orderByParams'        => 'OrderByParams',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'searchKey'            => 'SearchKey',
        'securityGroupId'      => 'SecurityGroupId',
        'status'               => 'Status',
        'vSwitchId'            => 'VSwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->ensRegionIds) {
            $res['EnsRegionIds'] = $this->ensRegionIds;
        }
        if (null !== $this->ensServiceId) {
            $res['EnsServiceId'] = $this->ensServiceId;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceResourceType) {
            $res['InstanceResourceType'] = $this->instanceResourceType;
        }
        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }
        if (null !== $this->networkId) {
            $res['NetworkId'] = $this->networkId;
        }
        if (null !== $this->orderByParams) {
            $res['OrderByParams'] = $this->orderByParams;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['EnsRegionIds'])) {
            $model->ensRegionIds = $map['EnsRegionIds'];
        }
        if (isset($map['EnsServiceId'])) {
            $model->ensServiceId = $map['EnsServiceId'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceResourceType'])) {
            $model->instanceResourceType = $map['InstanceResourceType'];
        }
        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }
        if (isset($map['NetworkId'])) {
            $model->networkId = $map['NetworkId'];
        }
        if (isset($map['OrderByParams'])) {
            $model->orderByParams = $map['OrderByParams'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
