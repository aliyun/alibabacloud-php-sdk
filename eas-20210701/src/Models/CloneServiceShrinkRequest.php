<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class CloneServiceShrinkRequest extends Model
{
    /**
     * @description The label of the service to be cloned.
     *
     * @var string
     */
    public $labelsShrink;

    /**
     * @description The request body. For more information, see [CreateService](https://help.aliyun.com/document_detail/412086.html).
     *
     * @example {   "name": "foo",   "model_path": "http://path/to/model.tar.gz",   "processor": "tensorflow_cpu",   "metadata": {     "instance": 2,     "memory": 7000,     "cpu": 4   } }
     *
     * @var string
     */
    public $body;
    protected $_name = [
        'labelsShrink' => 'Labels',
        'body' => 'body',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->labelsShrink) {
            $res['Labels'] = $this->labelsShrink;
        }
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CloneServiceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Labels'])) {
            $model->labelsShrink = $map['Labels'];
        }
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        return $model;
    }
}
