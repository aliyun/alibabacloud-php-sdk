<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetAppInstanceGroupResponseBody\appInstanceGroupModels;
use AlibabaCloud\Tea\Model;

class GetAppInstanceGroupResponseBody extends Model
{
    /**
     * @description AppInstanceGroupModels
     *
     * @var appInstanceGroupModels
     */
    public $appInstanceGroupModels;

    /**
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appInstanceGroupModels' => 'AppInstanceGroupModels',
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceGroupModels) {
            $res['AppInstanceGroupModels'] = null !== $this->appInstanceGroupModels ? $this->appInstanceGroupModels->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAppInstanceGroupResponseBody
     */
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
