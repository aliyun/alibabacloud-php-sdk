<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeAssetGroupToInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class dataList extends Model
{
    /**
     * @description The ID of the Anti-DDoS Origin instance of a paid edition.
     *
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
     * @description The ID of the asset.
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
     * @description The type of the asset.
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataList
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
