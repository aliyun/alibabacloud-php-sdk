<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class CreateImagePipelineResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $imagePipelineId;
    protected $_name = [
        'requestId'       => 'RequestId',
        'imagePipelineId' => 'ImagePipelineId',
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
        if (null !== $this->imagePipelineId) {
            $res['ImagePipelineId'] = $this->imagePipelineId;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ImagePipelineId'])) {
            $model->imagePipelineId = $map['ImagePipelineId'];
        }

        return $model;
    }
}
