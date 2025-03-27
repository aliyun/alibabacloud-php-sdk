<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupResponseBody\appInstanceGroupModel;

class CreateAppInstanceGroupResponseBody extends Model
{
    /**
     * @var appInstanceGroupModel
     */
    public $appInstanceGroupModel;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appInstanceGroupModel' => 'AppInstanceGroupModel',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->appInstanceGroupModel) {
            $this->appInstanceGroupModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInstanceGroupModel) {
            $res['AppInstanceGroupModel'] = null !== $this->appInstanceGroupModel ? $this->appInstanceGroupModel->toArray($noStream) : $this->appInstanceGroupModel;
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
        if (isset($map['AppInstanceGroupModel'])) {
            $model->appInstanceGroupModel = appInstanceGroupModel::fromMap($map['AppInstanceGroupModel']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
