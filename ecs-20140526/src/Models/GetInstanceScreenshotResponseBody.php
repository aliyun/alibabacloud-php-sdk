<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceScreenshotResponseBody extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example i-bp1gbz20g229bvu5****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The JPG-formatted instance screenshot, which is encoded in Base64.
     *
     * @example iVBORw0KGgoA...AAABJRU5ErkJggg==
     *
     * @var string
     */
    public $screenshot;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'requestId'  => 'RequestId',
        'screenshot' => 'Screenshot',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->screenshot) {
            $res['Screenshot'] = $this->screenshot;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceScreenshotResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Screenshot'])) {
            $model->screenshot = $map['Screenshot'];
        }

        return $model;
    }
}
