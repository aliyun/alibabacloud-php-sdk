<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\addOnsInfo;

use AlibabaCloud\Tea\Model;

class addOnsInfo extends Model
{
    /**
     * @description Specifies whether to enable auto-renewal. The parameter takes effect only when EcsChargeType is set to PrePaid. Valid values:
     *
     *   true: enables auto-renewal.
     *   false: disables auto-renewal.
     *
     * Default value: true.
     * @example local
     *
     * @var string
     */
    public $deployMode;

    /**
     * @description The bidding method of the compute node. Valid values:
     *
     *   NoSpot: The instance is created as a pay-as-you-go instance.
     *   SpotWithPriceLimit: The instance is created as a preemptible instance with a user-defined maximum hourly price.
     *   SpotAsPriceGo: The instance is a preemptible instance for which the market price at the time of purchase is automatically used as the bidding price.
     *
     * @example 10000
     *
     * @var int
     */
    public $port;

    /**
     * @description The auto-renewal period of the subscription compute nodes. The parameter takes effect when AutoRenew is set to true.
     *
     *   If PeriodUnit is set to Week, the valid values of the AutoRenewPeriod parameter are 1, 2, and 3.
     *   If PeriodUnit is set to Month, the valid values of the AutoRenewPeriod parameter are 1, 2, 3, 6, and 12.
     *
     * Default value: 1.
     * @example CROMWELL_85
     *
     * @var string
     */
    public $softwareId;

    /**
     * @description The maximum hourly price of the compute nodes. A maximum of three decimal places can be used in the value of the parameter. The parameter is valid only when the ComputeSpotStrategy parameter is set to SpotWithPriceLimit.
     *
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @description The information of the on-premises node in the cluster.
     *
     * @example http://172.16.10.12:10000/
     *
     * @var string
     */
    public $URL;
    protected $_name = [
        'deployMode' => 'DeployMode',
        'port'       => 'Port',
        'softwareId' => 'SoftwareId',
        'status'     => 'Status',
        'URL'        => 'URL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployMode) {
            $res['DeployMode'] = $this->deployMode;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->softwareId) {
            $res['SoftwareId'] = $this->softwareId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addOnsInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeployMode'])) {
            $model->deployMode = $map['DeployMode'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['SoftwareId'])) {
            $model->softwareId = $map['SoftwareId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }

        return $model;
    }
}
