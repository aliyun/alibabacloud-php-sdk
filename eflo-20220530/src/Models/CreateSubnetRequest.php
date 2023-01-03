<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class CreateSubnetRequest extends Model
{
    /**
     * @example 10.0.0.0/16
     *
     * @var string
     */
    public $cidr;

    /**
     * @example subnet-test
     *
     * @var string
     */
    public $name;

    /**
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @example OOB
     *
     * @var string
     */
    public $type;

    /**
     * @example vpd-xcuhjyrj
     *
     * @var string
     */
    public $vpdId;

    /**
     * @example cn-wulanchabu-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'cidr'     => 'Cidr',
        'name'     => 'Name',
        'regionId' => 'RegionId',
        'type'     => 'Type',
        'vpdId'    => 'VpdId',
        'zoneId'   => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSubnetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
