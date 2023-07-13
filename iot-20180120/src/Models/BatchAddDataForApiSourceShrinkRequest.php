<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class BatchAddDataForApiSourceShrinkRequest extends Model
{
    /**
     * @example cxatswiniekxw***
     *
     * @var string
     */
    public $apiId;

    /**
     * @example [{"key":"value1","ts":1637658286000},{"key":"value2","ts":1637658287000}]
     *
     * @var string
     */
    public $contentListShrink;

    /**
     * @example iot-0pp1n*****
     *
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'apiId'             => 'ApiId',
        'contentListShrink' => 'ContentList',
        'iotInstanceId'     => 'IotInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->contentListShrink) {
            $res['ContentList'] = $this->contentListShrink;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchAddDataForApiSourceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ContentList'])) {
            $model->contentListShrink = $map['ContentList'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
