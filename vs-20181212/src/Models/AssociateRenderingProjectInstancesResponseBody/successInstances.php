<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\AssociateRenderingProjectInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class successInstances extends Model
{
    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $message;

    /**
     * @example render-5130e2feb23f442fb9456a3d977f03d4
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
