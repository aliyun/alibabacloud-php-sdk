<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateImageRequest extends Model
{
    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $deleteAfterImageUpload;
    protected $_name = [
        'product'                => 'product',
        'version'                => 'Version',
        'instanceId'             => 'InstanceId',
        'imageName'              => 'ImageName',
        'deleteAfterImageUpload' => 'DeleteAfterImageUpload',
    ];

    public function validate()
    {
        Model::validateRequired('version', $this->version, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('imageName', $this->imageName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->product) {
            $res['product'] = $this->product;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->deleteAfterImageUpload) {
            $res['DeleteAfterImageUpload'] = $this->deleteAfterImageUpload;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['product'])) {
            $model->product = $map['product'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['DeleteAfterImageUpload'])) {
            $model->deleteAfterImageUpload = $map['DeleteAfterImageUpload'];
        }

        return $model;
    }
}
