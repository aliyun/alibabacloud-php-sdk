<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeEpnBandwitdhByInternetChargeTypeRequest extends Model
{
    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $networkingModel;
    protected $_name = [
        'version'         => 'Version',
        'startTime'       => 'StartTime',
        'endTime'         => 'EndTime',
        'isp'             => 'Isp',
        'ensRegionId'     => 'EnsRegionId',
        'networkingModel' => 'NetworkingModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->networkingModel) {
            $res['NetworkingModel'] = $this->networkingModel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEpnBandwitdhByInternetChargeTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['NetworkingModel'])) {
            $model->networkingModel = $map['NetworkingModel'];
        }

        return $model;
    }
}
