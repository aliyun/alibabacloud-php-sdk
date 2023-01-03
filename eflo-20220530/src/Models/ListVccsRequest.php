<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class ListVccsRequest extends Model
{
    /**
     * @example 5000
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @example cen-95iwtpyvj3kk1v0ao0
     *
     * @var string
     */
    public $cenId;

    /**
     * @example false
     *
     * @var bool
     */
    public $enablePage;

    /**
     * @example Prepaid
     *
     * @var string
     */
    public $exStatus;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @example vcc-cn-zvp2w222001
     *
     * @var string
     */
    public $vccId;

    /**
     * @example vpc-bp1nrtkmamy329u6a1z0i
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example vpd-omqutbff
     *
     * @var string
     */
    public $vpdId;
    protected $_name = [
        'bandwidth'  => 'Bandwidth',
        'cenId'      => 'CenId',
        'enablePage' => 'EnablePage',
        'exStatus'   => 'ExStatus',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'regionId'   => 'RegionId',
        'status'     => 'Status',
        'vccId'      => 'VccId',
        'vpcId'      => 'VpcId',
        'vpdId'      => 'VpdId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->enablePage) {
            $res['EnablePage'] = $this->enablePage;
        }
        if (null !== $this->exStatus) {
            $res['ExStatus'] = $this->exStatus;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vccId) {
            $res['VccId'] = $this->vccId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVccsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['EnablePage'])) {
            $model->enablePage = $map['EnablePage'];
        }
        if (isset($map['ExStatus'])) {
            $model->exStatus = $map['ExStatus'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VccId'])) {
            $model->vccId = $map['VccId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }

        return $model;
    }
}
