<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAndroidInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class instanceModel extends Model
{
    /**
     * @example ag-ayyhomlal7po****
     *
     * @var string
     */
    public $androidInstanceGroupId;

    /**
     * @example acp-8at8h6ejkadjh****
     *
     * @var string
     */
    public $androidInstanceId;

    /**
     * @example name
     *
     * @var string
     */
    public $androidInstanceName;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $androidInstanceStatus;

    /**
     * @example aig-i7yv6tkn7kh8dv****
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @example ai-9ey6io0q58rcd****
     *
     * @var string
     */
    public $appInstanceId;

    /**
     * @example test
     *
     * @var string
     */
    public $authorizedUserId;

    /**
     * @example test
     *
     * @var string
     */
    public $bindUserId;

    /**
     * @example FilePathNotFound
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example 2023-05-06 10:42:10
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2023-05-06 10:42:10
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example kp-5hh431emkpucs****
     *
     * @var string
     */
    public $keyPairId;

    /**
     * @example 192.168.22.48
     *
     * @var string
     */
    public $networkInterfaceIp;

    /**
     * @example p-0btrd5zj8epo****
     *
     * @var string
     */
    public $persistentAppInstanceId;

    /**
     * @example 100
     *
     * @var int
     */
    public $rate;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $renderingType;
    protected $_name = [
        'androidInstanceGroupId'  => 'AndroidInstanceGroupId',
        'androidInstanceId'       => 'AndroidInstanceId',
        'androidInstanceName'     => 'AndroidInstanceName',
        'androidInstanceStatus'   => 'AndroidInstanceStatus',
        'appInstanceGroupId'      => 'AppInstanceGroupId',
        'appInstanceId'           => 'AppInstanceId',
        'authorizedUserId'        => 'AuthorizedUserId',
        'bindUserId'              => 'BindUserId',
        'errorCode'               => 'ErrorCode',
        'gmtCreate'               => 'GmtCreate',
        'gmtModified'             => 'GmtModified',
        'keyPairId'               => 'KeyPairId',
        'networkInterfaceIp'      => 'NetworkInterfaceIp',
        'persistentAppInstanceId' => 'PersistentAppInstanceId',
        'rate'                    => 'Rate',
        'regionId'                => 'RegionId',
        'renderingType'           => 'RenderingType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceGroupId) {
            $res['AndroidInstanceGroupId'] = $this->androidInstanceGroupId;
        }
        if (null !== $this->androidInstanceId) {
            $res['AndroidInstanceId'] = $this->androidInstanceId;
        }
        if (null !== $this->androidInstanceName) {
            $res['AndroidInstanceName'] = $this->androidInstanceName;
        }
        if (null !== $this->androidInstanceStatus) {
            $res['AndroidInstanceStatus'] = $this->androidInstanceStatus;
        }
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
        }
        if (null !== $this->authorizedUserId) {
            $res['AuthorizedUserId'] = $this->authorizedUserId;
        }
        if (null !== $this->bindUserId) {
            $res['BindUserId'] = $this->bindUserId;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->keyPairId) {
            $res['KeyPairId'] = $this->keyPairId;
        }
        if (null !== $this->networkInterfaceIp) {
            $res['NetworkInterfaceIp'] = $this->networkInterfaceIp;
        }
        if (null !== $this->persistentAppInstanceId) {
            $res['PersistentAppInstanceId'] = $this->persistentAppInstanceId;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->renderingType) {
            $res['RenderingType'] = $this->renderingType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidInstanceGroupId'])) {
            $model->androidInstanceGroupId = $map['AndroidInstanceGroupId'];
        }
        if (isset($map['AndroidInstanceId'])) {
            $model->androidInstanceId = $map['AndroidInstanceId'];
        }
        if (isset($map['AndroidInstanceName'])) {
            $model->androidInstanceName = $map['AndroidInstanceName'];
        }
        if (isset($map['AndroidInstanceStatus'])) {
            $model->androidInstanceStatus = $map['AndroidInstanceStatus'];
        }
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
        }
        if (isset($map['AuthorizedUserId'])) {
            $model->authorizedUserId = $map['AuthorizedUserId'];
        }
        if (isset($map['BindUserId'])) {
            $model->bindUserId = $map['BindUserId'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['KeyPairId'])) {
            $model->keyPairId = $map['KeyPairId'];
        }
        if (isset($map['NetworkInterfaceIp'])) {
            $model->networkInterfaceIp = $map['NetworkInterfaceIp'];
        }
        if (isset($map['PersistentAppInstanceId'])) {
            $model->persistentAppInstanceId = $map['PersistentAppInstanceId'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RenderingType'])) {
            $model->renderingType = $map['RenderingType'];
        }

        return $model;
    }
}
