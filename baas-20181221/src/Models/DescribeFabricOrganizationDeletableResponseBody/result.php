<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeFabricOrganizationDeletableResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $deletable;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $organizationName;

    /**
     * @var string
     */
    public $codeName;

    /**
     * @var string
     */
    public $organizationDescription;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'deletable'               => 'Deletable',
        'domain'                  => 'Domain',
        'state'                   => 'State',
        'zoneId'                  => 'ZoneId',
        'organizationName'        => 'OrganizationName',
        'codeName'                => 'CodeName',
        'organizationDescription' => 'OrganizationDescription',
        'regionId'                => 'RegionId',
        'organizationId'          => 'OrganizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deletable) {
            $res['Deletable'] = $this->deletable;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->organizationName) {
            $res['OrganizationName'] = $this->organizationName;
        }
        if (null !== $this->codeName) {
            $res['CodeName'] = $this->codeName;
        }
        if (null !== $this->organizationDescription) {
            $res['OrganizationDescription'] = $this->organizationDescription;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Deletable'])) {
            $model->deletable = $map['Deletable'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['OrganizationName'])) {
            $model->organizationName = $map['OrganizationName'];
        }
        if (isset($map['CodeName'])) {
            $model->codeName = $map['CodeName'];
        }
        if (isset($map['OrganizationDescription'])) {
            $model->organizationDescription = $map['OrganizationDescription'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }

        return $model;
    }
}
