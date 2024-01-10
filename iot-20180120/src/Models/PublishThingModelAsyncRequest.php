<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class PublishThingModelAsyncRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $thingModelVersion;
    protected $_name = [
        'description'       => 'Description',
        'iotInstanceId'     => 'IotInstanceId',
        'productKey'        => 'ProductKey',
        'thingModelVersion' => 'ThingModelVersion',
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
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->thingModelVersion) {
            $res['ThingModelVersion'] = $this->thingModelVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PublishThingModelAsyncRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['ThingModelVersion'])) {
            $model->thingModelVersion = $map['ThingModelVersion'];
        }

        return $model;
    }
}
