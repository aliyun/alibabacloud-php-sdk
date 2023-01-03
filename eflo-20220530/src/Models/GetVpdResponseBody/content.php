<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetVpdResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $cidr;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 2022-12-26 20:16:36
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2022-12-26 20:16:36
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 0
     *
     * @var int
     */
    public $lbCount;

    /**
     * @var string
     */
    public $message;

    /**
     * @example VPD-TEST
     *
     * @var string
     */
    public $name;

    /**
     * @example 16
     *
     * @var int
     */
    public $ncCount;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 1
     *
     * @var int
     */
    public $route;

    /**
     * @example 169.254.252.0/23
     *
     * @var string
     */
    public $serviceCidr;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @example 1
     *
     * @var int
     */
    public $subnetCount;

    /**
     * @example 0
     *
     * @var int
     */
    public $vccCount;

    /**
     * @example vpd-fuliephf
     *
     * @var string
     */
    public $vpdId;
    protected $_name = [
        'cidr'        => 'Cidr',
        'description' => 'Description',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'lbCount'     => 'LbCount',
        'message'     => 'Message',
        'name'        => 'Name',
        'ncCount'     => 'NcCount',
        'regionId'    => 'RegionId',
        'route'       => 'Route',
        'serviceCidr' => 'ServiceCidr',
        'status'      => 'Status',
        'subnetCount' => 'SubnetCount',
        'vccCount'    => 'VccCount',
        'vpdId'       => 'VpdId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->lbCount) {
            $res['LbCount'] = $this->lbCount;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ncCount) {
            $res['NcCount'] = $this->ncCount;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->route) {
            $res['Route'] = $this->route;
        }
        if (null !== $this->serviceCidr) {
            $res['ServiceCidr'] = $this->serviceCidr;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subnetCount) {
            $res['SubnetCount'] = $this->subnetCount;
        }
        if (null !== $this->vccCount) {
            $res['VccCount'] = $this->vccCount;
        }
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['LbCount'])) {
            $model->lbCount = $map['LbCount'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NcCount'])) {
            $model->ncCount = $map['NcCount'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Route'])) {
            $model->route = $map['Route'];
        }
        if (isset($map['ServiceCidr'])) {
            $model->serviceCidr = $map['ServiceCidr'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubnetCount'])) {
            $model->subnetCount = $map['SubnetCount'];
        }
        if (isset($map['VccCount'])) {
            $model->vccCount = $map['VccCount'];
        }
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }

        return $model;
    }
}
