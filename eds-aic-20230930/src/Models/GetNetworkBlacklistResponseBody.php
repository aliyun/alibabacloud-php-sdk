<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsaic\V20230930\Models\GetNetworkBlacklistResponseBody\networkBlacklistModel;

class GetNetworkBlacklistResponseBody extends Model
{
    /**
     * @var networkBlacklistModel
     */
    public $networkBlacklistModel;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'networkBlacklistModel' => 'NetworkBlacklistModel',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->networkBlacklistModel) {
            $this->networkBlacklistModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkBlacklistModel) {
            $res['NetworkBlacklistModel'] = null !== $this->networkBlacklistModel ? $this->networkBlacklistModel->toArray($noStream) : $this->networkBlacklistModel;
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
        if (isset($map['NetworkBlacklistModel'])) {
            $model->networkBlacklistModel = networkBlacklistModel::fromMap($map['NetworkBlacklistModel']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
