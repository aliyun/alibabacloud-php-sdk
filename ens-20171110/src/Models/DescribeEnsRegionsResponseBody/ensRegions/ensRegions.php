<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionsResponseBody\ensRegions;

use AlibabaCloud\Tea\Model;

class ensRegions extends Model
{
    /**
     * @var string
     */
    public $area;

    /**
     * @var string
     */
    public $enName;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $name;

    /**
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
