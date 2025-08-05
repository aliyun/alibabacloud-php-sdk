<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribePostpayTrafficTotalResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 826B6280-9704-5643-97B1-6B47AC3F027A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of assets protected all types of firewalls.
     *
     * @example 132
     *
     * @var int
     */
    public $totalAssets;

    /**
     * @description The volume of burstable protected traffic for which fees are generated. Unit: bytes.
     *
     * @example 2320274874426
     *
     * @var int
     */
    public $totalBillTraffic;

    /**
     * @description The total number of assets protected by the Internet firewall.
     *
     * @example 128
     *
     * @var int
     */
    public $totalInternetAssets;

    /**
     * @description The total traffic for the Internet firewall. If you use Cloud Firewall that uses the subscription billing method, this parameter indicates the total volume of burstable protected traffic on the Internet boundary. Unit: bytes.
     *
     * @example 2320274874426
     *
     * @var int
     */
    public $totalInternetTraffic;

    /**
     * @description The total number of assets protected by NAT firewalls.
     *
     * @example 1
     *
     * @var int
     */
    public $totalNatAssets;

    /**
     * @description The total traffic for NAT firewalls. If you use Cloud Firewall that uses the subscription billing method, this parameter indicates the total volume of burstable protected traffic on the NAT boundary. Unit: bytes.
     *
     * @example 560646279
     *
     * @var int
     */
    public $totalNatTraffic;

    /**
     * @description Data Leak Detection Total Fee Flow.
     *
     * @example 22879916142
     *
     * @var int
     */
    public $totalSdlBillTraffic;

    /**
     * @description Data Leak Detection Total free usage traffic.
     *
     * @example 0
     *
     * @var int
     */
    public $totalSdlFreeTraffic;

    /**
     * @description The total volume of traffic. If you use Cloud Firewall that uses the subscription billing method, this parameter indicates the total volume of burstable protected traffic. Unit: bytes.
     *
     * @example 2320274874426
     *
     * @var int
     */
    public $totalTraffic;

    /**
     * @description The total number of assets protected by virtual private cloud (VPC) firewalls.
     *
     * @example 3
     *
     * @var int
     */
    public $totalVpcAssets;

    /**
     * @description The total traffic for VPC firewalls. If you use Cloud Firewall that uses the subscription billing method, this parameter indicates the total volume of burstable protected traffic on the VPC boundary. Unit: bytes.
     *
     * @example 2320274874426
     *
     * @var int
     */
    public $totalVpcTraffic;
    protected $_name = [
        'requestId' => 'RequestId',
        'totalAssets' => 'TotalAssets',
        'totalBillTraffic' => 'TotalBillTraffic',
        'totalInternetAssets' => 'TotalInternetAssets',
        'totalInternetTraffic' => 'TotalInternetTraffic',
        'totalNatAssets' => 'TotalNatAssets',
        'totalNatTraffic' => 'TotalNatTraffic',
        'totalSdlBillTraffic' => 'TotalSdlBillTraffic',
        'totalSdlFreeTraffic' => 'TotalSdlFreeTraffic',
        'totalTraffic' => 'TotalTraffic',
        'totalVpcAssets' => 'TotalVpcAssets',
        'totalVpcTraffic' => 'TotalVpcTraffic',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalAssets) {
            $res['TotalAssets'] = $this->totalAssets;
        }
        if (null !== $this->totalBillTraffic) {
            $res['TotalBillTraffic'] = $this->totalBillTraffic;
        }
        if (null !== $this->totalInternetAssets) {
            $res['TotalInternetAssets'] = $this->totalInternetAssets;
        }
        if (null !== $this->totalInternetTraffic) {
            $res['TotalInternetTraffic'] = $this->totalInternetTraffic;
        }
        if (null !== $this->totalNatAssets) {
            $res['TotalNatAssets'] = $this->totalNatAssets;
        }
        if (null !== $this->totalNatTraffic) {
            $res['TotalNatTraffic'] = $this->totalNatTraffic;
        }
        if (null !== $this->totalSdlBillTraffic) {
            $res['TotalSdlBillTraffic'] = $this->totalSdlBillTraffic;
        }
        if (null !== $this->totalSdlFreeTraffic) {
            $res['TotalSdlFreeTraffic'] = $this->totalSdlFreeTraffic;
        }
        if (null !== $this->totalTraffic) {
            $res['TotalTraffic'] = $this->totalTraffic;
        }
        if (null !== $this->totalVpcAssets) {
            $res['TotalVpcAssets'] = $this->totalVpcAssets;
        }
        if (null !== $this->totalVpcTraffic) {
            $res['TotalVpcTraffic'] = $this->totalVpcTraffic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePostpayTrafficTotalResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalAssets'])) {
            $model->totalAssets = $map['TotalAssets'];
        }
        if (isset($map['TotalBillTraffic'])) {
            $model->totalBillTraffic = $map['TotalBillTraffic'];
        }
        if (isset($map['TotalInternetAssets'])) {
            $model->totalInternetAssets = $map['TotalInternetAssets'];
        }
        if (isset($map['TotalInternetTraffic'])) {
            $model->totalInternetTraffic = $map['TotalInternetTraffic'];
        }
        if (isset($map['TotalNatAssets'])) {
            $model->totalNatAssets = $map['TotalNatAssets'];
        }
        if (isset($map['TotalNatTraffic'])) {
            $model->totalNatTraffic = $map['TotalNatTraffic'];
        }
        if (isset($map['TotalSdlBillTraffic'])) {
            $model->totalSdlBillTraffic = $map['TotalSdlBillTraffic'];
        }
        if (isset($map['TotalSdlFreeTraffic'])) {
            $model->totalSdlFreeTraffic = $map['TotalSdlFreeTraffic'];
        }
        if (isset($map['TotalTraffic'])) {
            $model->totalTraffic = $map['TotalTraffic'];
        }
        if (isset($map['TotalVpcAssets'])) {
            $model->totalVpcAssets = $map['TotalVpcAssets'];
        }
        if (isset($map['TotalVpcTraffic'])) {
            $model->totalVpcTraffic = $map['TotalVpcTraffic'];
        }

        return $model;
    }
}
