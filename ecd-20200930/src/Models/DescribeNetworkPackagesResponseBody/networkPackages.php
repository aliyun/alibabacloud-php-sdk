<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNetworkPackagesResponseBody;

use AlibabaCloud\Tea\Model;

class networkPackages extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string[]
     */
    public $eipAddresses;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $networkPackageId;

    /**
     * @var string
     */
    public $networkPackageStatus;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $officeSiteName;

    /**
     * @var string
     */
    public $officeSiteVpcType;
    protected $_name = [
        'bandwidth'            => 'Bandwidth',
        'createTime'           => 'CreateTime',
        'eipAddresses'         => 'EipAddresses',
        'expiredTime'          => 'ExpiredTime',
        'internetChargeType'   => 'InternetChargeType',
        'networkPackageId'     => 'NetworkPackageId',
        'networkPackageStatus' => 'NetworkPackageStatus',
        'officeSiteId'         => 'OfficeSiteId',
        'officeSiteName'       => 'OfficeSiteName',
        'officeSiteVpcType'    => 'OfficeSiteVpcType',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->eipAddresses) {
            $res['EipAddresses'] = $this->eipAddresses;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->networkPackageId) {
            $res['NetworkPackageId'] = $this->networkPackageId;
        }
        if (null !== $this->networkPackageStatus) {
            $res['NetworkPackageStatus'] = $this->networkPackageStatus;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }
        if (null !== $this->officeSiteVpcType) {
            $res['OfficeSiteVpcType'] = $this->officeSiteVpcType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkPackages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EipAddresses'])) {
            if (!empty($map['EipAddresses'])) {
                $model->eipAddresses = $map['EipAddresses'];
            }
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['NetworkPackageId'])) {
            $model->networkPackageId = $map['NetworkPackageId'];
        }
        if (isset($map['NetworkPackageStatus'])) {
            $model->networkPackageStatus = $map['NetworkPackageStatus'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }
        if (isset($map['OfficeSiteVpcType'])) {
            $model->officeSiteVpcType = $map['OfficeSiteVpcType'];
        }

        return $model;
    }
}
