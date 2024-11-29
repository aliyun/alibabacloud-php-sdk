<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorAttributeResponseBody\siteMonitors;

use AlibabaCloud\Tea\Model;

class vpcConfig extends Model
{
    /**
     * @description 内网拨测任务的目标站点所在地域。
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @example sg-xxxxxx
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example vpc-xxxxxx
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example vsw-xxxxxx
     *
     * @var string
     */
    public $vswitchId;
    protected $_name = [
        'region'          => 'Region',
        'securityGroupId' => 'SecurityGroupId',
        'vpcId'           => 'VpcId',
        'vswitchId'       => 'VswitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }

        return $model;
    }
}
