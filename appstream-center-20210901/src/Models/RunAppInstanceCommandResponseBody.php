<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\RunAppInstanceCommandResponseBody\commandResultModel;

class RunAppInstanceCommandResponseBody extends Model
{
    /**
     * @var commandResultModel
     */
    public $commandResultModel;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'commandResultModel' => 'CommandResultModel',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->commandResultModel) {
            $this->commandResultModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commandResultModel) {
            $res['CommandResultModel'] = null !== $this->commandResultModel ? $this->commandResultModel->toArray($noStream) : $this->commandResultModel;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CommandResultModel'])) {
            $model->commandResultModel = commandResultModel::fromMap($map['CommandResultModel']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
