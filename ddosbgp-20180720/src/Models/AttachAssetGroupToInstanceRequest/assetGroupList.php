<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\AttachAssetGroupToInstanceRequest;

use AlibabaCloud\Tea\Model;

class assetGroupList extends Model
{
    /**
     * @description The UID of the member to which the asset belongs.
     *
     * @example 1743970208320***
     *
     * @var string
     */
    public $memberUid;

    /**
     * @description The ID of the asset that you want to add. If the asset is a Web Application Firewall (WAF) instance, specify the ID of the WAF instance.
     *
     * @example waf-test-001
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
        'memberUid' => 'MemberUid',
        'name'      => 'Name',
        'region'    => 'Region',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return assetGroupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
