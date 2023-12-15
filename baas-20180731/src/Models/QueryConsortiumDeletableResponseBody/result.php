<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\QueryConsortiumDeletableResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $codeName;

    /**
     * @var string
     */
    public $consortiumId;

    /**
     * @var bool
     */
    public $deletable;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'codeName'     => 'CodeName',
        'consortiumId' => 'ConsortiumId',
        'deletable'    => 'Deletable',
        'description'  => 'Description',
        'domain'       => 'Domain',
        'name'         => 'Name',
        'regionId'     => 'RegionId',
        'state'        => 'State',
        'zoneId'       => 'ZoneId',
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
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
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
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
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
