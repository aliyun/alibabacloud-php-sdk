<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class BatchAddDataForApiSourceRequest extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var mixed[]
     */
    public $contentList;

    /**
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'apiId'         => 'ApiId',
        'contentList'   => 'ContentList',
        'iotInstanceId' => 'IotInstanceId',
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
        if (null !== $this->contentList) {
            $res['ContentList'] = $this->contentList;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchAddDataForApiSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ContentList'])) {
            $model->contentList = $map['ContentList'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
