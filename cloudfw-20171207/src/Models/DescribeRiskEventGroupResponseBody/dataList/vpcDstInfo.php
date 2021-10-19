<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeRiskEventGroupResponseBody\dataList;

use AlibabaCloud\Tea\Model;

class vpcDstInfo extends Model
{
    /**
     * @var string
     */
    public $ecsInstanceName;

    /**
     * @var string
     */
    public $networkInstanceName;

    /**
     * @var string
     */
    public $networkInstanceId;

    /**
     * @var string
     */
    public $ecsInstanceId;

    /**
     * @var string
     */
    public $regionNo;
    protected $_name = [
        'ecsInstanceName'     => 'EcsInstanceName',
        'networkInstanceName' => 'NetworkInstanceName',
        'networkInstanceId'   => 'NetworkInstanceId',
        'ecsInstanceId'       => 'EcsInstanceId',
        'regionNo'            => 'RegionNo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsInstanceName) {
            $res['EcsInstanceName'] = $this->ecsInstanceName;
        }
        if (null !== $this->networkInstanceName) {
            $res['NetworkInstanceName'] = $this->networkInstanceName;
        }
        if (null !== $this->networkInstanceId) {
            $res['NetworkInstanceId'] = $this->networkInstanceId;
        }
        if (null !== $this->ecsInstanceId) {
            $res['EcsInstanceId'] = $this->ecsInstanceId;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcDstInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsInstanceName'])) {
            $model->ecsInstanceName = $map['EcsInstanceName'];
        }
        if (isset($map['NetworkInstanceName'])) {
            $model->networkInstanceName = $map['NetworkInstanceName'];
        }
        if (isset($map['NetworkInstanceId'])) {
            $model->networkInstanceId = $map['NetworkInstanceId'];
        }
        if (isset($map['EcsInstanceId'])) {
            $model->ecsInstanceId = $map['EcsInstanceId'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }

        return $model;
    }
}
