<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomImageRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. By default, this parameter is left empty. The token cannot exceed 64 characters in length.
     *
     * @example 20393E53-8FF1-524C-B494-B478A5369733
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The description of the custom image.
     *
     * @example create for cc5g group auth rules test
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the custom image.
     *
     * This parameter is required.
     *
     * @example custom image name
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The ID of the cloud phone instance.
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
