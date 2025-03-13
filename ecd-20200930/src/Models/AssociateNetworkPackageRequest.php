<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class AssociateNetworkPackageRequest extends Model
{
    /**
     * @description The ID of the premium bandwidth plan.
     *
     * This parameter is required.
     * @example np-e0iodl3yzb62q****
     *
     * @var string
     */
    public $networkPackageId;

    /**
     * @description The ID of the office network. You can call the [DescribeNetworkPackages](https://help.aliyun.com/document_detail/216079.html) to obtain the ID of the office network to which a premium bandwidth plan is bound.
     *
     * This parameter is required.
     * @example cn-hangzhou+dir-*********
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The region ID. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/196646.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'networkPackageId' => 'NetworkPackageId',
        'officeSiteId'     => 'OfficeSiteId',
        'regionId'         => 'RegionId',
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
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AssociateNetworkPackageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkPackageId'])) {
            $model->networkPackageId = $map['NetworkPackageId'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
