<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO\drdsOrderDOList;

use AlibabaCloud\Tea\Model;

class drdsOrderDOList extends Model
{
    /**
     * @var string
     */
    public $azoneId;

    /**
     * @var string
     */
    public $instSpec;

    /**
     * @var string
     */
    public $network;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $VSwtichId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'azoneId'   => 'AzoneId',
        'instSpec'  => 'InstSpec',
        'network'   => 'Network',
        'regionId'  => 'RegionId',
        'VSwtichId' => 'VSwtichId',
        'vpcId'     => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->azoneId) {
            $res['AzoneId'] = $this->azoneId;
        }
        if (null !== $this->instSpec) {
            $res['InstSpec'] = $this->instSpec;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->VSwtichId) {
            $res['VSwtichId'] = $this->VSwtichId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return drdsOrderDOList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AzoneId'])) {
            $model->azoneId = $map['AzoneId'];
        }
        if (isset($map['InstSpec'])) {
            $model->instSpec = $map['InstSpec'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VSwtichId'])) {
            $model->VSwtichId = $map['VSwtichId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
