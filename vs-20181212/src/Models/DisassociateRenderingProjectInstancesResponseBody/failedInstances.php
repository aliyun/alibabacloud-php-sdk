<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DisassociateRenderingProjectInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class failedInstances extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @example render-421cd2a1125947c19fcd5c7dd2c7d31e
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
