<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CommitContainerRequest;

use AlibabaCloud\Tea\Model;

class acrRegistryInfo extends Model
{
    /**
     * @description The RAM role ARN of the account to which permissions are granted during a cross-account authorization.
     *
     * @example acs:ram::1609982529******:role/role-test
     *
     * @var string
     */
    public $arnService;

    /**
     * @description The RAM role ARN of the account that is used to grant permissions during a cross-account authorization.
     *
     * @example acs:ram::1298452580******:role/role-test
     *
     * @var string
     */
    public $arnUser;

    /**
     * @description The ID of the Container Registry Enterprise Edition instance.
     *
     * @example cri-nwj395hgf6f3****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the region where the Container Registry Enterprise Edition instance resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'arnService' => 'ArnService',
        'arnUser'    => 'ArnUser',
        'instanceId' => 'InstanceId',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arnService) {
            $res['ArnService'] = $this->arnService;
        }
        if (null !== $this->arnUser) {
            $res['ArnUser'] = $this->arnUser;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return acrRegistryInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArnService'])) {
            $model->arnService = $map['ArnService'];
        }
        if (isset($map['ArnUser'])) {
            $model->arnUser = $map['ArnUser'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
