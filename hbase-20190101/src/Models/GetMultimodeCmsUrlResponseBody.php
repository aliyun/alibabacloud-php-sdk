<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class GetMultimodeCmsUrlResponseBody extends Model
{
    /**
     * @example hb-t4naqsay5gn******
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example htpp://***********
     *
     * @var string
     */
    public $multimodCmsUrl;

    /**
     * @example 44183B05-852E-4716-B902-52977140190F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'multimodCmsUrl' => 'MultimodCmsUrl',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->multimodCmsUrl) {
            $res['MultimodCmsUrl'] = $this->multimodCmsUrl;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMultimodeCmsUrlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['MultimodCmsUrl'])) {
            $model->multimodCmsUrl = $map['MultimodCmsUrl'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
