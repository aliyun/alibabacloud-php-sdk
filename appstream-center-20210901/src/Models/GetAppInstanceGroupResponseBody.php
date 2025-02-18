<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetAppInstanceGroupResponseBody\appInstanceGroupModels;

class GetAppInstanceGroupResponseBody extends Model
{
    /**
     * @var appInstanceGroupModels
     */
    public $appInstanceGroupModels;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appInstanceGroupModels' => 'AppInstanceGroupModels',
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->appInstanceGroupModels) {
            $this->appInstanceGroupModels->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appInstanceGroupModels) {
            $res['AppInstanceGroupModels'] = null !== $this->appInstanceGroupModels ? $this->appInstanceGroupModels->toArray($noStream) : $this->appInstanceGroupModels;
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
        if (isset($map['AppInstanceGroupModels'])) {
            $model->appInstanceGroupModels = appInstanceGroupModels::fromMap($map['AppInstanceGroupModels']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
