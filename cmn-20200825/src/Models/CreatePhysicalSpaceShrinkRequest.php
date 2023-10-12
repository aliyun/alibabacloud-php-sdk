<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class CreatePhysicalSpaceShrinkRequest extends Model
{
    /**
     * @example 文一西路969号
     *
     * @var string
     */
    public $address;

    /**
     * @example 杭州市
     *
     * @var string
     */
    public $city;

    /**
     * @example 8e61b7dd-fc6c-44e4-bb9c-427b0a09a6f3
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example 中国
     *
     * @var string
     */
    public $country;

    /**
     * @example cmn-cn-xxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 张三
     *
     * @var string
     */
    public $owner;

    /**
     * @example space-twnepeeloclxxxxx
     *
     * @var string
     */
    public $parentUid;

    /**
     * @example 阿里巴巴西溪园区
     *
     * @var string
     */
    public $physicalSpaceName;

    /**
     * @example 浙江省
     *
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $securityDomainListShrink;

    /**
     * @example yq
     *
     * @var string
     */
    public $spaceAbbreviation;

    /**
     * @example 园区
     *
     * @var string
     */
    public $spaceType;
    protected $_name = [
        'address'                  => 'Address',
        'city'                     => 'City',
        'clientToken'              => 'ClientToken',
        'country'                  => 'Country',
        'instanceId'               => 'InstanceId',
        'owner'                    => 'Owner',
        'parentUid'                => 'ParentUid',
        'physicalSpaceName'        => 'PhysicalSpaceName',
        'province'                 => 'Province',
        'remark'                   => 'Remark',
        'securityDomainListShrink' => 'SecurityDomainList',
        'spaceAbbreviation'        => 'SpaceAbbreviation',
        'spaceType'                => 'SpaceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->parentUid) {
            $res['ParentUid'] = $this->parentUid;
        }
        if (null !== $this->physicalSpaceName) {
            $res['PhysicalSpaceName'] = $this->physicalSpaceName;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->securityDomainListShrink) {
            $res['SecurityDomainList'] = $this->securityDomainListShrink;
        }
        if (null !== $this->spaceAbbreviation) {
            $res['SpaceAbbreviation'] = $this->spaceAbbreviation;
        }
        if (null !== $this->spaceType) {
            $res['SpaceType'] = $this->spaceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePhysicalSpaceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ParentUid'])) {
            $model->parentUid = $map['ParentUid'];
        }
        if (isset($map['PhysicalSpaceName'])) {
            $model->physicalSpaceName = $map['PhysicalSpaceName'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['SecurityDomainList'])) {
            $model->securityDomainListShrink = $map['SecurityDomainList'];
        }
        if (isset($map['SpaceAbbreviation'])) {
            $model->spaceAbbreviation = $map['SpaceAbbreviation'];
        }
        if (isset($map['SpaceType'])) {
            $model->spaceType = $map['SpaceType'];
        }

        return $model;
    }
}
