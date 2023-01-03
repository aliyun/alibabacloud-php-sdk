<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\ListVpdsResponseBody\content;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $cidr;

    /**
     * @var mixed[]
     */
    public $dependence;

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
     * @example success
     *
     * @var string
     */
    public $message;

    /**
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
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 6
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
     * @description vpd id
     *
     * @example vpd-lg4dppgi
     *
     * @var string
     */
    public $vpdId;
    protected $_name = [
        'cidr'        => 'Cidr',
        'dependence'  => 'Dependence',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'message'     => 'Message',
        'name'        => 'Name',
        'ncCount'     => 'NcCount',
        'regionId'    => 'RegionId',
        'route'       => 'Route',
        'serviceCidr' => 'ServiceCidr',
        'status'      => 'Status',
        'subnetCount' => 'SubnetCount',
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
        if (null !== $this->dependence) {
            $res['Dependence'] = $this->dependence;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
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
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }
        if (isset($map['Dependence'])) {
            $model->dependence = $map['Dependence'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
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
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }

        return $model;
    }
}
