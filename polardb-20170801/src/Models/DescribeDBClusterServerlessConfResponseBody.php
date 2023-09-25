<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Tea\Model;

class DescribeDBClusterServerlessConfResponseBody extends Model
{
    /**
     * @description Indicates whether the no-activity suspension feature is enabled. Default value: false. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var string
     */
    public $allowShutDown;

    /**
     * @description The ID of the serverless cluster.
     *
     * @example pc-bp10gr51qasnl****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The ID of the request.
     *
     * @example 5E71541A-6007-4DCC-A38A-F872C31FEB45
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $scaleApRoNumMax;

    /**
     * @var string
     */
    public $scaleApRoNumMin;

    /**
     * @description The maximum number of PCUs per node for scaling. Valid values: 1 PCU to 32 PCUs.
     *
     * @example 3
     *
     * @var string
     */
    public $scaleMax;

    /**
     * @description The minimum number of PCUs per node for scaling. Valid values: 1 PCU to 31 PCUs.
     *
     * @example 1
     *
     * @var string
     */
    public $scaleMin;

    /**
     * @description The maximum number of read-only nodes for scaling. Valid values: 0 to 15.
     *
     * @example 4
     *
     * @var string
     */
    public $scaleRoNumMax;

    /**
     * @description The minimum number of read-only nodes for scaling. Valid values: 0 to 15.
     *
     * @example 2
     *
     * @var string
     */
    public $scaleRoNumMin;

    /**
     * @description The detection period for no-activity suspension. Valid values: 300 to 86400. Unit: seconds. The value must be a multiple of 300.
     *
     * @example 10
     *
     * @var string
     */
    public $secondsUntilAutoPause;

    /**
     * @var string
     */
    public $switchs;
    protected $_name = [
        'allowShutDown'         => 'AllowShutDown',
        'DBClusterId'           => 'DBClusterId',
        'requestId'             => 'RequestId',
        'scaleApRoNumMax'       => 'ScaleApRoNumMax',
        'scaleApRoNumMin'       => 'ScaleApRoNumMin',
        'scaleMax'              => 'ScaleMax',
        'scaleMin'              => 'ScaleMin',
        'scaleRoNumMax'         => 'ScaleRoNumMax',
        'scaleRoNumMin'         => 'ScaleRoNumMin',
        'secondsUntilAutoPause' => 'SecondsUntilAutoPause',
        'switchs'               => 'Switchs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowShutDown) {
            $res['AllowShutDown'] = $this->allowShutDown;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scaleApRoNumMax) {
            $res['ScaleApRoNumMax'] = $this->scaleApRoNumMax;
        }
        if (null !== $this->scaleApRoNumMin) {
            $res['ScaleApRoNumMin'] = $this->scaleApRoNumMin;
        }
        if (null !== $this->scaleMax) {
            $res['ScaleMax'] = $this->scaleMax;
        }
        if (null !== $this->scaleMin) {
            $res['ScaleMin'] = $this->scaleMin;
        }
        if (null !== $this->scaleRoNumMax) {
            $res['ScaleRoNumMax'] = $this->scaleRoNumMax;
        }
        if (null !== $this->scaleRoNumMin) {
            $res['ScaleRoNumMin'] = $this->scaleRoNumMin;
        }
        if (null !== $this->secondsUntilAutoPause) {
            $res['SecondsUntilAutoPause'] = $this->secondsUntilAutoPause;
        }
        if (null !== $this->switchs) {
            $res['Switchs'] = $this->switchs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBClusterServerlessConfResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowShutDown'])) {
            $model->allowShutDown = $map['AllowShutDown'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScaleApRoNumMax'])) {
            $model->scaleApRoNumMax = $map['ScaleApRoNumMax'];
        }
        if (isset($map['ScaleApRoNumMin'])) {
            $model->scaleApRoNumMin = $map['ScaleApRoNumMin'];
        }
        if (isset($map['ScaleMax'])) {
            $model->scaleMax = $map['ScaleMax'];
        }
        if (isset($map['ScaleMin'])) {
            $model->scaleMin = $map['ScaleMin'];
        }
        if (isset($map['ScaleRoNumMax'])) {
            $model->scaleRoNumMax = $map['ScaleRoNumMax'];
        }
        if (isset($map['ScaleRoNumMin'])) {
            $model->scaleRoNumMin = $map['ScaleRoNumMin'];
        }
        if (isset($map['SecondsUntilAutoPause'])) {
            $model->secondsUntilAutoPause = $map['SecondsUntilAutoPause'];
        }
        if (isset($map['Switchs'])) {
            $model->switchs = $map['Switchs'];
        }

        return $model;
    }
}
