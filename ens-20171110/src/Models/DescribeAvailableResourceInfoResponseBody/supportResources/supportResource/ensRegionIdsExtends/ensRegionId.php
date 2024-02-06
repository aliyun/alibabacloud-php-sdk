<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeAvailableResourceInfoResponseBody\supportResources\supportResource\ensRegionIdsExtends;

use AlibabaCloud\Tea\Model;

class ensRegionId extends Model
{
    /**
     * @description The region.
     *
     * @example EastChina
     *
     * @var string
     */
    public $area;

    /**
     * @description The name. This parameter is empty by default.
     *
     * @example EnName
     *
     * @var string
     */
    public $enName;

    /**
     * @description The ID of the edge node.
     *
     * @example cn-chengdu-telecom-4
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The information about the Internet service provider (ISP).
     *
     * @example unicom
     *
     * @var string
     */
    public $isp;

    /**
     * @description The name of the edge node.
     *
     * @var string
     */
    public $name;

    /**
     * @description The province.
     *
     * @var string
     */
    public $province;
    protected $_name = [
        'area'        => 'Area',
        'enName'      => 'EnName',
        'ensRegionId' => 'EnsRegionId',
        'isp'         => 'Isp',
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
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
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
     * @return ensRegionId
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
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
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
