<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class AddDataForApiSourceRequest extends Model
{
    /**
     * @example cxatswiniekxw***
     *
     * @var string
     */
    public $apiId;

    /**
     * @example {"key":"value","ts":16376582*****}
     *
     * @var string
     */
    public $content;

    /**
     * @example iot-0pp1n*****
     *
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'apiId'         => 'ApiId',
        'content'       => 'Content',
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
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDataForApiSourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
