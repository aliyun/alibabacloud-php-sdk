<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionsResponseBody\ensRegions;

use AlibabaCloud\Tea\Model;

class ensRegions extends Model
{
    /**
     * @description The code of the region.
     *
     * @example NorthEastChina
     *
     * @var string
     */
    public $area;

    /**
     * @description The name of the node.
     *
     * @example NorthChina
     *
     * @var string
     */
    public $enName;

    /**
     * @description The ID of the node.
     *
     * @example cn-dalian-unicom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The name of the node.
     *
     * @var string
     */
    public $name;

    /**
     * @description The province where the node is deployed.
     *
     * @var string
     */
    public $province;
    protected $_name = [
        'area'        => 'Area',
        'enName'      => 'EnName',
        'ensRegionId' => 'EnsRegionId',
        'name'        => 'Name',
        'province'    => 'Province',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->enName) {
            $res['EnName'] = $this->enName;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ensRegions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['EnName'])) {
            $model->enName = $map['EnName'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        return $model;
    }
}
