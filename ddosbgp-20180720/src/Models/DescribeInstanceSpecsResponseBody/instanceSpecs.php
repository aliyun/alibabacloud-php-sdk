<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceSpecsResponseBody;

use AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeInstanceSpecsResponseBody\instanceSpecs\packConfig;
use AlibabaCloud\Tea\Model;

class instanceSpecs extends Model
{
    /**
     * @var packConfig
     */
    public $packConfig;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $availableDeleteBlackholeCount;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'packConfig'                    => 'PackConfig',
        'region'                        => 'Region',
        'availableDeleteBlackholeCount' => 'AvailableDeleteBlackholeCount',
        'instanceId'                    => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->packConfig) {
            $res['PackConfig'] = null !== $this->packConfig ? $this->packConfig->toMap() : null;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->availableDeleteBlackholeCount) {
            $res['AvailableDeleteBlackholeCount'] = $this->availableDeleteBlackholeCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceSpecs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PackConfig'])) {
            $model->packConfig = packConfig::fromMap($map['PackConfig']);
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['AvailableDeleteBlackholeCount'])) {
            $model->availableDeleteBlackholeCount = $map['AvailableDeleteBlackholeCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
