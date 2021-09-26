<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeRegionsResponseBody;

use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeRegionsResponseBody\businessLocations\district;
use AlibabaCloud\Tea\Model;

class businessLocations extends Model
{
    /**
     * @var string
     */
    public $ordering;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $showName;

    /**
     * @var string
     */
    public $description;

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
    public $cnName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var district
     */
    public $district;
    protected $_name = [
        'ordering'      => 'Ordering',
        'type'          => 'Type',
        'showName'      => 'ShowName',
        'description'   => 'Description',
        'enDescription' => 'EnDescription',
        'enName'        => 'EnName',
        'cnName'        => 'CnName',
        'name'          => 'Name',
        'district'      => 'District',
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->enDescription) {
            $res['EnDescription'] = $this->enDescription;
        }
        if (null !== $this->enName) {
            $res['EnName'] = $this->enName;
        }
        if (null !== $this->cnName) {
            $res['CnName'] = $this->cnName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->district) {
            $res['District'] = null !== $this->district ? $this->district->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return businessLocations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ordering'])) {
            $model->ordering = $map['Ordering'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EnDescription'])) {
            $model->enDescription = $map['EnDescription'];
        }
        if (isset($map['EnName'])) {
            $model->enName = $map['EnName'];
        }
        if (isset($map['CnName'])) {
            $model->cnName = $map['CnName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['District'])) {
            $model->district = district::fromMap($map['District']);
        }

        return $model;
    }
}
