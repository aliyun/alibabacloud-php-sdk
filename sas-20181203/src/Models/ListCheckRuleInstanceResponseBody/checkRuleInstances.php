<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckRuleInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class checkRuleInstances extends Model
{
    /**
     * @description The instance ID of the asset.
     *
     * @example i-j6c76lh1kvrcvwl*****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The instance name of the asset.
     *
     * @example testEcs
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Region ID.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkRuleInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
