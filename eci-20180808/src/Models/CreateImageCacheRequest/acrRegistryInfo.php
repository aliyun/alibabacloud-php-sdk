<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateImageCacheRequest;

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
     * @var string[]
     */
    public $domain;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'arnService' => 'ArnService',
        'arnUser' => 'ArnUser',
        'domain' => 'Domain',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->domain)) {
            Model::validateArray($this->domain);
        }
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

        if (null !== $this->domain) {
            if (\is_array($this->domain)) {
                $res['Domain'] = [];
                $n1 = 0;
                foreach ($this->domain as $item1) {
                    $res['Domain'][$n1++] = $item1;
                }
            }
        }

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

        if (isset($map['Domain'])) {
            if (!empty($map['Domain'])) {
                $model->domain = [];
                $n1 = 0;
                foreach ($map['Domain'] as $item1) {
                    $model->domain[$n1++] = $item1;
                }
            }
        }

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
