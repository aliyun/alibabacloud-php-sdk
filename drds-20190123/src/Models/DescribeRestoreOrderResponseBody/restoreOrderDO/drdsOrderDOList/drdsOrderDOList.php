<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeRestoreOrderResponseBody\restoreOrderDO\drdsOrderDOList;

use AlibabaCloud\Tea\Model;

class drdsOrderDOList extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $network;

    /**
     * @var string
     */
    public $VSwtichId;

    /**
     * @var string
     */
    public $instSpec;

    /**
     * @var string
     */
    public $azoneId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'vpcId'     => 'VpcId',
        'network'   => 'Network',
        'VSwtichId' => 'VSwtichId',
        'instSpec'  => 'InstSpec',
        'azoneId'   => 'AzoneId',
        'regionId'  => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->VSwtichId) {
            $res['VSwtichId'] = $this->VSwtichId;
        }
        if (null !== $this->instSpec) {
            $res['InstSpec'] = $this->instSpec;
        }
        if (null !== $this->azoneId) {
            $res['AzoneId'] = $this->azoneId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['VSwtichId'])) {
            $model->VSwtichId = $map['VSwtichId'];
        }
        if (isset($map['InstSpec'])) {
            $model->instSpec = $map['InstSpec'];
        }
        if (isset($map['AzoneId'])) {
            $model->azoneId = $map['AzoneId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
