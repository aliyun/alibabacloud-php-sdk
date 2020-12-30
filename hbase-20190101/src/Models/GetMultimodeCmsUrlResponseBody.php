<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models;

use AlibabaCloud\Tea\Model;

class GetMultimodeCmsUrlResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $multimodCmsUrl;
    protected $_name = [
        'requestId'      => 'RequestId',
        'clusterId'      => 'ClusterId',
        'multimodCmsUrl' => 'MultimodCmsUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->multimodCmsUrl) {
            $res['MultimodCmsUrl'] = $this->multimodCmsUrl;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['MultimodCmsUrl'])) {
            $model->multimodCmsUrl = $map['MultimodCmsUrl'];
        }

        return $model;
    }
}
