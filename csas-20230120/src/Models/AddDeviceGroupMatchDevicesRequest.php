<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class AddDeviceGroupMatchDevicesRequest extends Model
{
    /**
     * @var string[]
     */
    public $devTags;

    /**
     * @var string
     */
    public $deviceGroupId;
    protected $_name = [
        'devTags' => 'DevTags',
        'deviceGroupId' => 'DeviceGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->devTags)) {
            Model::validateArray($this->devTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->devTags) {
            if (\is_array($this->devTags)) {
                $res['DevTags'] = [];
                $n1 = 0;
                foreach ($this->devTags as $item1) {
                    $res['DevTags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->deviceGroupId) {
            $res['DeviceGroupId'] = $this->deviceGroupId;
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
        if (isset($map['DevTags'])) {
            if (!empty($map['DevTags'])) {
                $model->devTags = [];
                $n1 = 0;
                foreach ($map['DevTags'] as $item1) {
                    $model->devTags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DeviceGroupId'])) {
            $model->deviceGroupId = $map['DeviceGroupId'];
        }

        return $model;
    }
}
