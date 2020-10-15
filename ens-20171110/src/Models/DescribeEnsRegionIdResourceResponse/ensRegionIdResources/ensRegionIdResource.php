<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionIdResourceResponse\ensRegionIdResources;

use AlibabaCloud\Tea\Model;

class ensRegionIdResource extends Model
{
    /**
     * @var string
     */
    public $area;

    /**
     * @var string
     */
    public $areaCode;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $ensRegionIdName;

    /**
     * @var int
     */
    public $VCpu;

    /**
     * @var int
     */
    public $internetBandwidth;

    /**
     * @var string
     */
    public $isp;

    /**
     * @var string
     */
    public $bizDate;

    /**
     * @var int
     */
    public $instanceCount;
    protected $_name = [
        'area'              => 'Area',
        'areaCode'          => 'AreaCode',
        'ensRegionId'       => 'EnsRegionId',
        'ensRegionIdName'   => 'EnsRegionIdName',
        'VCpu'              => 'VCpu',
        'internetBandwidth' => 'InternetBandwidth',
        'isp'               => 'Isp',
        'bizDate'           => 'BizDate',
        'instanceCount'     => 'InstanceCount',
    ];

    public function validate()
    {
        Model::validateRequired('area', $this->area, true);
        Model::validateRequired('areaCode', $this->areaCode, true);
        Model::validateRequired('ensRegionId', $this->ensRegionId, true);
        Model::validateRequired('ensRegionIdName', $this->ensRegionIdName, true);
        Model::validateRequired('VCpu', $this->VCpu, true);
        Model::validateRequired('internetBandwidth', $this->internetBandwidth, true);
        Model::validateRequired('isp', $this->isp, true);
        Model::validateRequired('bizDate', $this->bizDate, true);
        Model::validateRequired('instanceCount', $this->instanceCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->areaCode) {
            $res['AreaCode'] = $this->areaCode;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->ensRegionIdName) {
            $res['EnsRegionIdName'] = $this->ensRegionIdName;
        }
        if (null !== $this->VCpu) {
            $res['VCpu'] = $this->VCpu;
        }
        if (null !== $this->internetBandwidth) {
            $res['InternetBandwidth'] = $this->internetBandwidth;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ensRegionIdResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['AreaCode'])) {
            $model->areaCode = $map['AreaCode'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['EnsRegionIdName'])) {
            $model->ensRegionIdName = $map['EnsRegionIdName'];
        }
        if (isset($map['VCpu'])) {
            $model->VCpu = $map['VCpu'];
        }
        if (isset($map['InternetBandwidth'])) {
            $model->internetBandwidth = $map['InternetBandwidth'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }

        return $model;
    }
}
