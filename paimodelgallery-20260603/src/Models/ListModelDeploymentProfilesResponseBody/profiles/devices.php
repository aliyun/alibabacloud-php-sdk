<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIModelGallery\V20260603\Models\ListModelDeploymentProfilesResponseBody\profiles;

use AlibabaCloud\Dara\Model;

class devices extends Model
{
    /**
     * @var string
     */
    public $deviceCategory;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string[]
     */
    public $instanceTypes;
    protected $_name = [
        'deviceCategory' => 'DeviceCategory',
        'deviceType' => 'DeviceType',
        'displayName' => 'DisplayName',
        'instanceTypes' => 'InstanceTypes',
    ];

    public function validate()
    {
        if (\is_array($this->instanceTypes)) {
            Model::validateArray($this->instanceTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceCategory) {
            $res['DeviceCategory'] = $this->deviceCategory;
        }

        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->instanceTypes) {
            if (\is_array($this->instanceTypes)) {
                $res['InstanceTypes'] = [];
                $n1 = 0;
                foreach ($this->instanceTypes as $item1) {
                    $res['InstanceTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DeviceCategory'])) {
            $model->deviceCategory = $map['DeviceCategory'];
        }

        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['InstanceTypes'])) {
            if (!empty($map['InstanceTypes'])) {
                $model->instanceTypes = [];
                $n1 = 0;
                foreach ($map['InstanceTypes'] as $item1) {
                    $model->instanceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
