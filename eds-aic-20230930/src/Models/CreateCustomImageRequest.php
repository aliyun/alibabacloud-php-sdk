<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomImageRequest extends Model
{
    /**
     * @description Idempotent parameter. Default is empty, with a maximum length of 100 characters.
     *
     * @example 20393E53-8FF1-524C-B494-B478A5369733
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Image description.
     *
     * @example create for cc5g group auth rules test
     *
     * @var string
     */
    public $description;

    /**
     * @description Image name.
     *
     * This parameter is required.
     *
     * @example custom image name
     *
     * @var string
     */
    public $imageName;

    /**
     * @description Instance ID.
     *
     * This parameter is required.
     *
     * @example acp-2zecay9ponatdc4m****
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'imageName' => 'ImageName',
        'instanceId' => 'InstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
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
