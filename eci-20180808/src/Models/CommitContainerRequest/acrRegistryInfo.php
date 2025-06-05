<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CommitContainerRequest;

use AlibabaCloud\Dara\Model;

class acrRegistryInfo extends Model
{
    /**
     * @var string
     */
    public $arnService;

    /**
     * @var string
     */
    public $arnUser;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'arnService' => 'ArnService',
        'arnUser' => 'ArnUser',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
