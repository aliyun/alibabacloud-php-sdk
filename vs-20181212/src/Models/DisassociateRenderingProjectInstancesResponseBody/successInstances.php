<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DisassociateRenderingProjectInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class successInstances extends Model
{
    /**
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @example render-e6cf423c787e4e43b460a788da254fe3
     *
     * @var string
     */
    public $renderingInstanceId;
    protected $_name = [
        'message' => 'Message',
        'renderingInstanceId' => 'RenderingInstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return successInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }

        return $model;
    }
}
