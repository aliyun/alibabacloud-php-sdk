<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomImageRequest extends Model
{
    /**
     * @example create for cc5g group auth rules test
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example custom image name
     *
     * @var string
     */
    public $imageName;

    /**
     * @description This parameter is required.
     *
     * @example acp-2zecay9ponatdc4m****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'description' => 'Description',
        'imageName'   => 'ImageName',
        'instanceId'  => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
