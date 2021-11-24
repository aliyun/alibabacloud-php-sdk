<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryBusinessLocationsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $cnName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $districtCnName;

    /**
     * @var string
     */
    public $districtEnName;

    /**
     * @var string
     */
    public $districtId;

    /**
     * @var int
     */
    public $districtOrdering;

    /**
     * @var string
     */
    public $districtShowName;

    /**
     * @var string
     */
    public $enDescription;

    /**
     * @var string
     */
    public $enName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $ordering;

    /**
     * @var string
     */
    public $showName;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'cnName'           => 'CnName',
        'description'      => 'Description',
        'districtCnName'   => 'DistrictCnName',
        'districtEnName'   => 'DistrictEnName',
        'districtId'       => 'DistrictId',
        'districtOrdering' => 'DistrictOrdering',
        'districtShowName' => 'DistrictShowName',
        'enDescription'    => 'EnDescription',
        'enName'           => 'EnName',
        'name'             => 'Name',
        'ordering'         => 'Ordering',
        'showName'         => 'ShowName',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cnName) {
            $res['CnName'] = $this->cnName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->districtCnName) {
            $res['DistrictCnName'] = $this->districtCnName;
        }
        if (null !== $this->districtEnName) {
            $res['DistrictEnName'] = $this->districtEnName;
        }
        if (null !== $this->districtId) {
            $res['DistrictId'] = $this->districtId;
        }
        if (null !== $this->districtOrdering) {
            $res['DistrictOrdering'] = $this->districtOrdering;
        }
        if (null !== $this->districtShowName) {
            $res['DistrictShowName'] = $this->districtShowName;
        }
        if (null !== $this->enDescription) {
            $res['EnDescription'] = $this->enDescription;
        }
        if (null !== $this->enName) {
            $res['EnName'] = $this->enName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ordering) {
            $res['Ordering'] = $this->ordering;
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CnName'])) {
            $model->cnName = $map['CnName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DistrictCnName'])) {
            $model->districtCnName = $map['DistrictCnName'];
        }
        if (isset($map['DistrictEnName'])) {
            $model->districtEnName = $map['DistrictEnName'];
        }
        if (isset($map['DistrictId'])) {
            $model->districtId = $map['DistrictId'];
        }
        if (isset($map['DistrictOrdering'])) {
            $model->districtOrdering = $map['DistrictOrdering'];
        }
        if (isset($map['DistrictShowName'])) {
            $model->districtShowName = $map['DistrictShowName'];
        }
        if (isset($map['EnDescription'])) {
            $model->enDescription = $map['EnDescription'];
        }
        if (isset($map['EnName'])) {
            $model->enName = $map['EnName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Ordering'])) {
            $model->ordering = $map['Ordering'];
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
