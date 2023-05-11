<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetThingModelTslPublishedResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The string of the TSL model.
     *
     * @example {\"schema\":\"https://iotx-tsl.oss-ap-southeast-1.aliyuncs.com/schema.json\",\"profile\":{\"productKey\":\"a14TeWI****\"},\"properties\":[{\"identifier\":\"Humidity\"}]}
     *
     * @var string
     */
    public $tslStr;

    /**
     * @description The URI that is used to store the TSL data in Object Storage Service (OSS). The URI is valid for 60 minutes.
     *
     * @example https://iotx-pop-dsl.oss-cn-shanghai.aliyuncs.com/thing/a14TeWI****\/model.json?Expires=1581947119&OSSAccessKeyId=LTAIuFOwFSR9****&Signature=5i389hacjdj3t%2FnrHmQpEUfnxw****
     *
     * @var string
     */
    public $tslUri;
    protected $_name = [
        'tslStr' => 'TslStr',
        'tslUri' => 'TslUri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tslStr) {
            $res['TslStr'] = $this->tslStr;
        }
        if (null !== $this->tslUri) {
            $res['TslUri'] = $this->tslUri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TslStr'])) {
            $model->tslStr = $map['TslStr'];
        }
        if (isset($map['TslUri'])) {
            $model->tslUri = $map['TslUri'];
        }

        return $model;
    }
}
