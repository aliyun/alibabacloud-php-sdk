<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ResetDeviceInstanceRequest extends Model
{
    /**
     * @description The ID of the application. To obtain the application ID, call the ListApplications operation. For more information, see the API documentation of ListApplications.
     *
     * @example d0639abf-789a-4527-b420-031d2cd9ad9b
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the image.
     *
     * @example m-5si16wo6simkt267p8b7hcmy3
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The ID of the instance.
     *
     * @example i-5sfdblzjqf3zvjnr7oh0bhhj2
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'appId'      => 'AppId',
        'imageId'    => 'ImageId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetDeviceInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
