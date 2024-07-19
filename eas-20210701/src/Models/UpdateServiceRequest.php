<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class UpdateServiceRequest extends Model
{
    /**
     * @description The type of the service update. Valid values: merge and replace. By default, merge is used if you do not specify this parameter.
     *
     *   merge: If the JSON string configured for the existing service is `{"a":"b"}` and the JSON string specified in the body parameter is `{"c":"d"}`, the JSON string is `{"a":"b","c":"d"}` after the service update.
     *   replace: If the JSON string configured for the existing service is `{"a":"b"}` and the JSON string specified in the body parameter is `{"c":"d"}`, the JSON string is `{"c":"d"}` after the service update.
     *
     * @example merge
     *
     * @var string
     */
    public $updateType;

    /**
     * @description The request body. The body includes the request parameters that you want to update. For more information about the request parameters, see [CreateService](https://help.aliyun.com/document_detail/412086.html).
     *
     * @example {   "name": "foo",   "model_path": "http://path/to/model.tar.gz",   "processor": "tensorflow_cpu",   "metadata": {     "instance": 2,     "memory": 7000,     "cpu": 4   } }
     *
     * @var string
     */
    public $body;
    protected $_name = [
        'updateType' => 'UpdateType',
        'body'       => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateType) {
            $res['UpdateType'] = $this->updateType;
        }
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UpdateType'])) {
            $model->updateType = $map['UpdateType'];
        }
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}
