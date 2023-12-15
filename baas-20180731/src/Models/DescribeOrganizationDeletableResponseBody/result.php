<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeOrganizationDeletableResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example name
     *
     * @var string
     */
    public $codeName;

    /**
     * @example false
     *
     * @var bool
     */
    public $deletable;

    /**
     * @example desc
     *
     * @var string
     */
    public $description;

    /**
     * @example domain
     *
     * @var string
     */
    public $domain;

    /**
     * @example orgname
     *
     * @var string
     */
    public $name;

    /**
     * @example peers-aaaaaa2-1eqnj5o5w****
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example Running
     *
     * @var string
     */
    public $state;

    /**
     * @example zone
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'codeName'       => 'CodeName',
        'deletable'      => 'Deletable',
        'description'    => 'Description',
        'domain'         => 'Domain',
        'name'           => 'Name',
        'organizationId' => 'OrganizationId',
        'regionId'       => 'RegionId',
        'state'          => 'State',
        'zoneId'         => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->codeName) {
            $res['CodeName'] = $this->codeName;
        }
        if (null !== $this->deletable) {
            $res['Deletable'] = $this->deletable;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['CodeName'])) {
            $model->codeName = $map['CodeName'];
        }
        if (isset($map['Deletable'])) {
            $model->deletable = $map['Deletable'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
