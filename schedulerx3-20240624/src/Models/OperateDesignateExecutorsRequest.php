<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Tea\Model;

class OperateDesignateExecutorsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $addressList;

    /**
     * @description This parameter is required.
     *
     * @example test-app
     *
     * @var string
     */
    public $appName;

    /**
     * @description This parameter is required.
     *
     * @example xxljob-b6ec1xxxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $designateType;

    /**
     * @description This parameter is required.
     *
     * @example 74
     *
     * @var int
     */
    public $jobId;

    /**
     * @example true
     *
     * @var bool
     */
    public $transferable;
    protected $_name = [
        'addressList' => 'AddressList',
        'appName' => 'AppName',
        'clusterId' => 'ClusterId',
        'designateType' => 'DesignateType',
        'jobId' => 'JobId',
        'transferable' => 'Transferable',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressList) {
            $res['AddressList'] = $this->addressList;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->designateType) {
            $res['DesignateType'] = $this->designateType;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->transferable) {
            $res['Transferable'] = $this->transferable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateDesignateExecutorsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressList'])) {
            if (!empty($map['AddressList'])) {
                $model->addressList = $map['AddressList'];
            }
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DesignateType'])) {
            $model->designateType = $map['DesignateType'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Transferable'])) {
            $model->transferable = $map['Transferable'];
        }

        return $model;
    }
}
