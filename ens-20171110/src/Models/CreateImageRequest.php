<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateImageRequest extends Model
{
    /**
     * @example false
     *
     * @var string
     */
    public $deleteAfterImageUpload;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @example i-5rr1bnyrc4tswr8cq3w6y1fjw
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example DAILY_FORECAST_15D
     *
     * @var string
     */
    public $product;
    protected $_name = [
        'deleteAfterImageUpload' => 'DeleteAfterImageUpload',
        'imageName'              => 'ImageName',
        'instanceId'             => 'InstanceId',
        'product'                => 'product',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteAfterImageUpload) {
            $res['DeleteAfterImageUpload'] = $this->deleteAfterImageUpload;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->product) {
            $res['product'] = $this->product;
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
        if (isset($map['DeleteAfterImageUpload'])) {
            $model->deleteAfterImageUpload = $map['DeleteAfterImageUpload'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['product'])) {
            $model->product = $map['product'];
        }

        return $model;
    }
}
