<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\AssociateRenderingProjectInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class failedInstances extends Model
{
    /**
     * @example invalid id
     *
     * @var string
     */
    public $message;

    /**
     * @example render-b45f28650ffe4591bf4c5c95996a428c
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
     * @return failedInstances
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
