<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribePostpayTrafficTotalResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalAssets;

    /**
     * @var int
     */
    public $totalBillTraffic;

    /**
     * @var int
     */
    public $totalInternetAssets;

    /**
     * @var int
     */
    public $totalInternetTraffic;

    /**
     * @var int
     */
    public $totalNatAssets;

    /**
     * @var int
     */
    public $totalNatTraffic;

    /**
     * @var int
     */
    public $totalSdlBillTraffic;

    /**
     * @var int
     */
    public $totalSdlFreeTraffic;

    /**
     * @var int
     */
    public $totalTraffic;

    /**
     * @var int
     */
    public $totalVpcAssets;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
