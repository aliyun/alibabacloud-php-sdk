<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models;

use AlibabaCloud\Tea\Model;

class DescribeAssetGroupToInstanceRequest extends Model
{
    /**
     * @description The ID of the instance to query.
     *
     * >  You can call the [DescribeInstanceList](https://help.aliyun.com/document_detail/118698.html) operation to query the IDs of all Anti-DDoS Origin instances of paid editions.
     * @example ddosbgp-cn-7212zaa5v***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The UID of the member to which the asset belongs.
     *
     * @example 170858869679****
     *
     * @var string
     */
    public $memberUid;

    /**
     * @description The ID of the asset. If the asset is a Web Application Firewall (WAF) instance, specify the ID of the WAF instance.
     *
     * @example waf_v2_public_cn-lbj382l****
     *
     * @var string
     */
    public $name;

    /**
     * @description The region ID of the asset.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the region in which the instance resides.
     *
     * >  You can call the [DescribeRegions](https://help.aliyun.com/document_detail/118703.html) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The type of the asset. Valid values:
     *
     *   **waf**: WAF instance
     *   **ga**: Global Accelerator (GA) instance
     *
     * @example waf
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'memberUid'  => 'MemberUid',
        'name'       => 'Name',
        'region'     => 'Region',
        'regionId'   => 'RegionId',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->memberUid) {
            $res['MemberUid'] = $this->memberUid;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAssetGroupToInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MemberUid'])) {
            $model->memberUid = $map['MemberUid'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
