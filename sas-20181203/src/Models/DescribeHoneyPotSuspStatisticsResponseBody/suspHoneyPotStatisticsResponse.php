<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeHoneyPotSuspStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class suspHoneyPotStatisticsResponse extends Model
{
    /**
     * @description The total number of alerts that are generated for the asset.
     *
     * @example 8793
     *
     * @var int
     */
    public $count;

    /**
     * @description The ID of the server.
     *
     * >  This parameter is returned only if **StatisticsKeyType** is set to **uuid**.
     * @example i-p0whhoba24wd28p8****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the server.
     *
     * >  This parameter is returned only if **StatisticsKeyType** is set to **uuid**.
     * @example abc-launch-advisor
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The type of the asset. Valid values:
     *
     *   **vpcInstanceId**: VPC
     *   **uuid**: server
     *
     * @example vpcInstanceId
     *
     * @var string
     */
    public $type;

    /**
     * @description The ID of the VPC.
     *
     * >  This parameter is returned only if **StatisticsKeyType** is set to **vpcInstanceId**.
     * @example vpc-p0wwdsuutdyu1ygkt****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The name of the VPC.
     *
     * >  This parameter is returned only if **StatisticsKeyType** is set to **vpcInstanceId**.
     * @example abc01
     *
     * @var string
     */
    public $vpcName;
    protected $_name = [
        'count'        => 'Count',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'type'         => 'Type',
        'vpcId'        => 'VpcId',
        'vpcName'      => 'VpcName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return suspHoneyPotStatisticsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }

        return $model;
    }
}
