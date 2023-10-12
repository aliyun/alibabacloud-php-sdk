<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListPhysicalSpacesResponseBody;

use AlibabaCloud\Tea\Model;

class physicalSpaces extends Model
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
     * @example 中国
     *
     * @var string
     */
    public $country;

    /**
     * @example {}
     *
     * @var string
     */
    public $instance;

    /**
     * @example 张三
     *
     * @var string
     */
    public $owner;

    /**
     * @example space-ez6zd3w68ma4fsd4
     *
     * @var string
     */
    public $physicalSpaceId;

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
     * @example 备注
     *
     * @var string
     */
    public $remark;

    /**
     * @var string[]
     */
    public $securityDomainList;

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
        'address'            => 'Address',
        'city'               => 'City',
        'country'            => 'Country',
        'instance'           => 'Instance',
        'owner'              => 'Owner',
        'physicalSpaceId'    => 'PhysicalSpaceId',
        'physicalSpaceName'  => 'PhysicalSpaceName',
        'province'           => 'Province',
        'remark'             => 'Remark',
        'securityDomainList' => 'SecurityDomainList',
        'spaceAbbreviation'  => 'SpaceAbbreviation',
        'spaceType'          => 'SpaceType',
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
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->instance) {
            $res['Instance'] = $this->instance;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->physicalSpaceId) {
            $res['PhysicalSpaceId'] = $this->physicalSpaceId;
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
        if (null !== $this->securityDomainList) {
            $res['SecurityDomainList'] = $this->securityDomainList;
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
     * @return physicalSpaces
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
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['Instance'])) {
            $model->instance = $map['Instance'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['PhysicalSpaceId'])) {
            $model->physicalSpaceId = $map['PhysicalSpaceId'];
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
            if (!empty($map['SecurityDomainList'])) {
                $model->securityDomainList = $map['SecurityDomainList'];
            }
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
