<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\ListVccsResponseBody\content;

use AlibabaCloud\SDK\Eflo\V20220530\Models\ListVccsResponseBody\content\data\vpdBaseInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example ap-cn-beijing-hd-A
     *
     * @var string
     */
    public $accessPointId;

    /**
     * @example 1000
     *
     * @var string
     */
    public $bandwidthStr;

    /**
     * @example 172.16.128.0/24
     *
     * @var string
     */
    public $bgpCidr;

    /**
     * @example cen-w15qot0pfvs83pkckj
     *
     * @var string
     */
    public $cenId;

    /**
     * @example 2022-07-29 19:16:09
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2022-05-12 14:06:06
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example Other
     *
     * @var string
     */
    public $lineOperator;

    /**
     * @var string
     */
    public $message;

    /**
     * @example 10GBase-LR
     *
     * @var string
     */
    public $portType;

    /**
     * @example 1
     *
     * @var float
     */
    public $rate;

    /**
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @example Large
     *
     * @var string
     */
    public $spec;

    /**
     * @example Init
     *
     * @var string
     */
    public $status;

    /**
     * @example t39qj7nlruwu8
     *
     * @var string
     */
    public $tenantId;

    /**
     * @example vcc-cn-zvp2w222001
     *
     * @var string
     */
    public $vccId;

    /**
     * @example vcc-heyuan-backup
     *
     * @var string
     */
    public $vccName;

    /**
     * @example vpc-f8ziirfl9k25h2qn7y4f8
     *
     * @var string
     */
    public $vpcId;

    /**
     * @var vpdBaseInfo
     */
    public $vpdBaseInfo;

    /**
     * @example vpd-eoiy88ju
     *
     * @var string
     */
    public $vpdId;
    protected $_name = [
        'accessPointId' => 'AccessPointId',
        'bandwidthStr'  => 'BandwidthStr',
        'bgpCidr'       => 'BgpCidr',
        'cenId'         => 'CenId',
        'createTime'    => 'CreateTime',
        'gmtModified'   => 'GmtModified',
        'lineOperator'  => 'LineOperator',
        'message'       => 'Message',
        'portType'      => 'PortType',
        'rate'          => 'Rate',
        'regionId'      => 'RegionId',
        'spec'          => 'Spec',
        'status'        => 'Status',
        'tenantId'      => 'TenantId',
        'vccId'         => 'VccId',
        'vccName'       => 'VccName',
        'vpcId'         => 'VpcId',
        'vpdBaseInfo'   => 'VpdBaseInfo',
        'vpdId'         => 'VpdId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }
        if (null !== $this->bandwidthStr) {
            $res['BandwidthStr'] = $this->bandwidthStr;
        }
        if (null !== $this->bgpCidr) {
            $res['BgpCidr'] = $this->bgpCidr;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->lineOperator) {
            $res['LineOperator'] = $this->lineOperator;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->portType) {
            $res['PortType'] = $this->portType;
        }
        if (null !== $this->rate) {
            $res['Rate'] = $this->rate;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->vccId) {
            $res['VccId'] = $this->vccId;
        }
        if (null !== $this->vccName) {
            $res['VccName'] = $this->vccName;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpdBaseInfo) {
            $res['VpdBaseInfo'] = null !== $this->vpdBaseInfo ? $this->vpdBaseInfo->toMap() : null;
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
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }
        if (isset($map['BandwidthStr'])) {
            $model->bandwidthStr = $map['BandwidthStr'];
        }
        if (isset($map['BgpCidr'])) {
            $model->bgpCidr = $map['BgpCidr'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['LineOperator'])) {
            $model->lineOperator = $map['LineOperator'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PortType'])) {
            $model->portType = $map['PortType'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['VccId'])) {
            $model->vccId = $map['VccId'];
        }
        if (isset($map['VccName'])) {
            $model->vccName = $map['VccName'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpdBaseInfo'])) {
            $model->vpdBaseInfo = vpdBaseInfo::fromMap($map['VpdBaseInfo']);
        }
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }

        return $model;
    }
}
