<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateImagePipelineResponseBody extends Model
{
    /**
     * @description The ID of the image template.
     *
     * @example ip-2ze5tsl5bp6nf2b3****
     *
     * @var string
     */
    public $imagePipelineId;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imagePipelineId' => 'ImagePipelineId',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imagePipelineId) {
            $res['ImagePipelineId'] = $this->imagePipelineId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateImagePipelineResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImagePipelineId'])) {
            $model->imagePipelineId = $map['ImagePipelineId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
