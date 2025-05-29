<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\AssociateRenderingProjectInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class failedInstances extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $renderingInstanceId;
    protected $_name = [
        'message' => 'Message',
        'renderingInstanceId' => 'RenderingInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
