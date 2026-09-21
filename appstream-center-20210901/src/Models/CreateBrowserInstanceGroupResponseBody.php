<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateBrowserInstanceGroupResponseBody\browserInstanceGroupModel;

class CreateBrowserInstanceGroupResponseBody extends Model
{
    /**
     * @var browserInstanceGroupModel
     */
    public $browserInstanceGroupModel;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'browserInstanceGroupModel' => 'BrowserInstanceGroupModel',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->browserInstanceGroupModel) {
            $this->browserInstanceGroupModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->browserInstanceGroupModel) {
            $res['BrowserInstanceGroupModel'] = null !== $this->browserInstanceGroupModel ? $this->browserInstanceGroupModel->toArray($noStream) : $this->browserInstanceGroupModel;
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
        if (isset($map['BrowserInstanceGroupModel'])) {
            $model->browserInstanceGroupModel = browserInstanceGroupModel::fromMap($map['BrowserInstanceGroupModel']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
