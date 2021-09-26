<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeRegionsResponseBody\businessLocations;

use AlibabaCloud\Tea\Model;

class district extends Model
{
    /**
     * @var string
     */
    public $ordering;

    /**
     * @var string
     */
    public $cnName;

    /**
     * @var string
     */
    public $showName;

    /**
     * @var string
     */
    public $districtId;

    /**
     * @var string
     */
    public $enName;
    protected $_name = [
        'ordering'   => 'Ordering',
        'cnName'     => 'CnName',
        'showName'   => 'ShowName',
        'districtId' => 'DistrictId',
        'enName'     => 'EnName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ordering) {
            $res['Ordering'] = $this->ordering;
        }
        if (null !== $this->cnName) {
            $res['CnName'] = $this->cnName;
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }
        if (null !== $this->districtId) {
            $res['DistrictId'] = $this->districtId;
        }
        if (null !== $this->enName) {
            $res['EnName'] = $this->enName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return district
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ordering'])) {
            $model->ordering = $map['Ordering'];
        }
        if (isset($map['CnName'])) {
            $model->cnName = $map['CnName'];
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }
        if (isset($map['DistrictId'])) {
            $model->districtId = $map['DistrictId'];
        }
        if (isset($map['EnName'])) {
            $model->enName = $map['EnName'];
        }

        return $model;
    }
}
