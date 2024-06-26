<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class CreateOrganizationRequest extends Model
{
    /**
     * @example description
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example domain
     *
     * @var string
     */
    public $domain;

    /**
     * @example 24
     *
     * @var int
     */
    public $duration;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $majorVersion;

    /**
     * @description This parameter is required.
     *
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @example 2
     *
     * @var int
     */
    public $peersCount;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @description This parameter is required.
     *
     * @example basic
     *
     * @var string
     */
    public $specName;
    protected $_name = [
        'description'  => 'Description',
        'domain'       => 'Domain',
        'duration'     => 'Duration',
        'location'     => 'Location',
        'majorVersion' => 'MajorVersion',
        'name'         => 'Name',
        'peersCount'   => 'PeersCount',
        'pricingCycle' => 'PricingCycle',
        'specName'     => 'SpecName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->majorVersion) {
            $res['MajorVersion'] = $this->majorVersion;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->peersCount) {
            $res['PeersCount'] = $this->peersCount;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->specName) {
            $res['SpecName'] = $this->specName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrganizationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['MajorVersion'])) {
            $model->majorVersion = $map['MajorVersion'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PeersCount'])) {
            $model->peersCount = $map['PeersCount'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['SpecName'])) {
            $model->specName = $map['SpecName'];
        }

        return $model;
    }
}
