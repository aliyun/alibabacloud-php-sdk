<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddCasterVideoResourceResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example CF60DB6A-7FD6-426E-9288-122CC1A52FA7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the resource. This parameter can be used as a request parameter in the API operation that you can call to delete the video source in the production studio or modify the video source in the production studio.
     *
     * @example e5542d98-b08c-46bf-83e9-5b09d08c****
     *
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'requestId' => 'RequestId',
        'resourceId' => 'ResourceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCasterVideoResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
