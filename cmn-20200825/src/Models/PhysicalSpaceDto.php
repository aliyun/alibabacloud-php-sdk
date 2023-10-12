<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class PhysicalSpaceDto extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var \AlibabaCloud\SDK\Cmn\V20200825\Models\PhysicalSpaceDto[]
     */
    public $children;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $fullParentPath;

    /**
     * @var string
     */
    public $instance;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $parentUid;

    /**
     * @var string
     */
    public $physicalSpaceId;

    /**
     * @var string
     */
    public $physicalSpaceName;

    /**
     * @var string
     */
    public $province;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string[]
     */
    public $securityDomainList;

    /**
     * @var string
     */
    public $spaceAbbreviation;

    /**
     * @var string
     */
    public $spaceType;
    protected $_name = [
        'address'            => 'Address',
        'children'           => 'Children',
        'city'               => 'City',
        'country'            => 'Country',
        'fullParentPath'     => 'FullParentPath',
        'instance'           => 'Instance',
        'owner'              => 'Owner',
        'parentUid'          => 'ParentUid',
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
        if (null !== $this->children) {
            $res['Children'] = [];
            if (null !== $this->children && \is_array($this->children)) {
                $n = 0;
                foreach ($this->children as $item) {
                    $res['Children'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->fullParentPath) {
            $res['FullParentPath'] = $this->fullParentPath;
        }
        if (null !== $this->instance) {
            $res['Instance'] = $this->instance;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->parentUid) {
            $res['ParentUid'] = $this->parentUid;
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
     * @return PhysicalSpaceDto
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = [];
                $n               = 0;
                foreach ($map['Children'] as $item) {
                    $model->children[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['FullParentPath'])) {
            $model->fullParentPath = $map['FullParentPath'];
        }
        if (isset($map['Instance'])) {
            $model->instance = $map['Instance'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['ParentUid'])) {
            $model->parentUid = $map['ParentUid'];
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
