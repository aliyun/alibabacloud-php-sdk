<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeNetworkPackagesResponseBody;

use AlibabaCloud\Tea\Model;

class networkPackages extends Model
{
    /**
     * @var string
     */
    public $networkPackageId;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $networkPackageStatus;

    /**
     * @var string
     */
    public $officeSiteName;

    /**
     * @var string[]
     */
    public $eipAddresses;
    protected $_name = [
        'networkPackageId'     => 'NetworkPackageId',
        'bandwidth'            => 'Bandwidth',
        'expiredTime'          => 'ExpiredTime',
        'createTime'           => 'CreateTime',
        'officeSiteId'         => 'OfficeSiteId',
        'internetChargeType'   => 'InternetChargeType',
        'networkPackageStatus' => 'NetworkPackageStatus',
        'officeSiteName'       => 'OfficeSiteName',
        'eipAddresses'         => 'EipAddresses',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkPackageId) {
            $res['NetworkPackageId'] = $this->networkPackageId;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->networkPackageStatus) {
            $res['NetworkPackageStatus'] = $this->networkPackageStatus;
        }
        if (null !== $this->officeSiteName) {
            $res['OfficeSiteName'] = $this->officeSiteName;
        }
        if (null !== $this->eipAddresses) {
            $res['EipAddresses'] = $this->eipAddresses;
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
        if (isset($map['NetworkPackageId'])) {
            $model->networkPackageId = $map['NetworkPackageId'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['NetworkPackageStatus'])) {
            $model->networkPackageStatus = $map['NetworkPackageStatus'];
        }
        if (isset($map['OfficeSiteName'])) {
            $model->officeSiteName = $map['OfficeSiteName'];
        }
        if (isset($map['EipAddresses'])) {
            if (!empty($map['EipAddresses'])) {
                $model->eipAddresses = $map['EipAddresses'];
            }
        }

        return $model;
    }
}
