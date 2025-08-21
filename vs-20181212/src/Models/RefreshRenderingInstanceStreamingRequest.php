<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\RefreshRenderingInstanceStreamingRequest\clientInfo;

class RefreshRenderingInstanceStreamingRequest extends Model
{
    /**
     * @var clientInfo
     */
    public $clientInfo;

    /**
     * @var string
     */
    public $renderingInstanceId;
    protected $_name = [
        'clientInfo' => 'ClientInfo',
        'renderingInstanceId' => 'RenderingInstanceId',
    ];

    public function validate()
    {
        if (null !== $this->clientInfo) {
            $this->clientInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientInfo) {
            $res['ClientInfo'] = null !== $this->clientInfo ? $this->clientInfo->toArray($noStream) : $this->clientInfo;
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
        if (isset($map['ClientInfo'])) {
            $model->clientInfo = clientInfo::fromMap($map['ClientInfo']);
        }

        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }

        return $model;
    }
}
