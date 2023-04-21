<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class AssociateNetworkPackageRequest extends Model
{
    /**
     * @description The ID of the Internet access package. You can call the [DescribeNetworkPackages](~~216079~~) operation to query the ID of the Internet access package.
     *
     * @example np-e0iodl3yzb62q****
     *
     * @var string
     */
    public $networkPackageId;

    /**
     * @description The ID of the workspace. You can call the [DescribeOfficeSites](~~216071~~) operation to query the ID of the workspace.
     *
     * @example cn-hangzhou+dir-*********
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The ID of the region. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
     *
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
