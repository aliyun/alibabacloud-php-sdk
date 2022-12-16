<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryBusinessLocationsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The Chinese name of the region.
     *
     * @example China (Shanghai)
     *
     * @var string
     */
    public $cnName;

    /**
     * @description The description of the region.
     *
     * @example China (Shanghai)
     *
     * @var string
     */
    public $description;

    /**
     * @description The Chinese name of the district.
     *
     * @example Asia Pacific
     *
     * @var string
     */
    public $districtCnName;

    /**
     * @description The English name of the district.
     *
     * @example Asia Pacific
     *
     * @var string
     */
    public $districtEnName;

    /**
     * @description The ID of the district.
     *
     * @example asia-pacific
     *
     * @var string
     */
    public $districtId;

    /**
     * @description The ordering information of the district.
     *
     * @example 101
     *
     * @var int
     */
    public $districtOrdering;

    /**
     * @description The display name of the district.
     *
     * @example Asia Pacific
     *
     * @var string
     */
    public $districtShowName;

    /**
     * @description The complete description of the region.
     *
     * @example China East 2 (Shanghai)
     *
     * @var string
     */
    public $enDescription;

    /**
     * @description The English name of the region.
     *
     * @example China (Shanghai)
     *
     * @var string
     */
    public $enName;

    /**
     * @description The ID of the region.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $name;

    /**
     * @description The ordering information.
     *
     * @example 6
     *
     * @var int
     */
    public $ordering;

    /**
     * @description The display name of the region.
     *
     * @example China (Shanghai)
     *
     * @var string
     */
    public $showName;

    /**
     * @description The type of the data.
     *
     * @example region
     *
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
