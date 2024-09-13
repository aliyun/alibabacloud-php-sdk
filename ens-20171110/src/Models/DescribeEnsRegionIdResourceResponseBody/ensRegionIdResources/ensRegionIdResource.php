<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionIdResourceResponseBody\ensRegionIdResources;

use AlibabaCloud\Tea\Model;

class ensRegionIdResource extends Model
{
    /**
     * @description The region. Set the value to West.
     *
     * @example West
     *
     * @var string
     */
    public $area;

    /**
     * @description The code of the region.
     *
     * @example 300100
     *
     * @var string
     */
    public $areaCode;

    /**
     * @description The date when the transaction was processed.
     *
     * @example 2019-10-30
     *
     * @var string
     */
    public $bizDate;

    /**
     * @description The ID of the node.
     *
     * @example cn-hangzhou-telecom
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The name of the node.
     *
     * @example Nanjing Mobile
     *
     * @var string
     */
    public $ensRegionIdName;

    /**
     * @description The number of instances.
     *
     * @example 10
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @description The public bandwidth of the instance. Unit: Bits/s.
     *
     * @example 100
     *
     * @var int
     */
    public $internetBandwidth;

    /**
     * @description The ISP. Valid values:
     *
     *   cmcc: China Mobile
     *   unicom: China Unicom
     *   telecom: China Telecom
     *   multiCarrier: multi-line ISP
     *
     * @example cmcc
     *
     * @var string
     */
    public $isp;

    /**
     * @description The number of vCPUs.
     *
     * @example 10
     *
     * @var int
     */
    public $VCpu;
    protected $_name = [
        'area'              => 'Area',
        'areaCode'          => 'AreaCode',
        'bizDate'           => 'BizDate',
        'ensRegionId'       => 'EnsRegionId',
        'ensRegionIdName'   => 'EnsRegionIdName',
        'instanceCount'     => 'InstanceCount',
        'internetBandwidth' => 'InternetBandwidth',
        'isp'               => 'Isp',
        'VCpu'              => 'VCpu',
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
        if (null !== $this->areaCode) {
            $res['AreaCode'] = $this->areaCode;
        }
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->ensRegionIdName) {
            $res['EnsRegionIdName'] = $this->ensRegionIdName;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->internetBandwidth) {
            $res['InternetBandwidth'] = $this->internetBandwidth;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->VCpu) {
            $res['VCpu'] = $this->VCpu;
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
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['EnsRegionIdName'])) {
            $model->ensRegionIdName = $map['EnsRegionIdName'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['InternetBandwidth'])) {
            $model->internetBandwidth = $map['InternetBandwidth'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['VCpu'])) {
            $model->VCpu = $map['VCpu'];
        }

        return $model;
    }
}
