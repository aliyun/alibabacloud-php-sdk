<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class BatchAddDataForApiSourceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $contentListShrink;

    /**
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
        Model::validateRequired('apiId', $this->apiId, true);
        Model::validateRequired('contentListShrink', $this->contentListShrink, true);
        Model::validateRequired('iotInstanceId', $this->iotInstanceId, true);
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
