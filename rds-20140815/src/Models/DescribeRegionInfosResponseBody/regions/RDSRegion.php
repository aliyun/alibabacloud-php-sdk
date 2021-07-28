<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRegionInfosResponseBody\regions;

use AlibabaCloud\Tea\Model;

class RDSRegion extends Model
{
    /**
     * @var string
     */
    public $cnLocalName;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $avz;

    /**
     * @var string
     */
    public $avzStatus;

    /**
     * @var string
     */
    public $regionEndpoint;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $enLocalName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cnLocalName'    => 'CnLocalName',
        'regionName'     => 'RegionName',
        'avz'            => 'Avz',
        'avzStatus'      => 'AvzStatus',
        'regionEndpoint' => 'RegionEndpoint',
        'category'       => 'Category',
        'enLocalName'    => 'EnLocalName',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cnLocalName) {
            $res['CnLocalName'] = $this->cnLocalName;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->avz) {
            $res['Avz'] = $this->avz;
        }
        if (null !== $this->avzStatus) {
            $res['AvzStatus'] = $this->avzStatus;
        }
        if (null !== $this->regionEndpoint) {
            $res['RegionEndpoint'] = $this->regionEndpoint;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->enLocalName) {
            $res['EnLocalName'] = $this->enLocalName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RDSRegion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CnLocalName'])) {
            $model->cnLocalName = $map['CnLocalName'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['Avz'])) {
            $model->avz = $map['Avz'];
        }
        if (isset($map['AvzStatus'])) {
            $model->avzStatus = $map['AvzStatus'];
        }
        if (isset($map['RegionEndpoint'])) {
            $model->regionEndpoint = $map['RegionEndpoint'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['EnLocalName'])) {
            $model->enLocalName = $map['EnLocalName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
