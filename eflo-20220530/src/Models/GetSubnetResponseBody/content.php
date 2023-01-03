<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\GetSubnetResponseBody;

use AlibabaCloud\SDK\Eflo\V20220530\Models\GetSubnetResponseBody\content\vpdBaseInfo;
use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @example 10.10.10.0/24
     *
     * @var string
     */
    public $cidr;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 2022-12-21 00:00:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2022-04-11 15:19:58
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description ID
     *
     * @example 277
     *
     * @var int
     */
    public $id;

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
     * @example aa
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
     * @example subnet-aj93mko8
     *
     * @var string
     */
    public $subnetId;

    /**
     * @example 1655449505171
     *
     * @var string
     */
    public $tenantId;

    /**
     * @example OOB
     *
     * @var string
     */
    public $type;

    /**
     * @var vpdBaseInfo
     */
    public $vpdBaseInfo;

    /**
     * @example vpd-ze3na0wf
     *
     * @var string
     */
    public $vpdId;

    /**
     * @example cn-wulanchabu-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'cidr'        => 'Cidr',
        'description' => 'Description',
        'gmtCreate'   => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id'          => 'Id',
        'lbCount'     => 'LbCount',
        'message'     => 'Message',
        'name'        => 'Name',
        'ncCount'     => 'NcCount',
        'regionId'    => 'RegionId',
        'status'      => 'Status',
        'subnetId'    => 'SubnetId',
        'tenantId'    => 'TenantId',
        'type'        => 'Type',
        'vpdBaseInfo' => 'VpdBaseInfo',
        'vpdId'       => 'VpdId',
        'zoneId'      => 'ZoneId',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subnetId) {
            $res['SubnetId'] = $this->subnetId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vpdBaseInfo) {
            $res['VpdBaseInfo'] = null !== $this->vpdBaseInfo ? $this->vpdBaseInfo->toMap() : null;
        }
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubnetId'])) {
            $model->subnetId = $map['SubnetId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VpdBaseInfo'])) {
            $model->vpdBaseInfo = vpdBaseInfo::fromMap($map['VpdBaseInfo']);
        }
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
