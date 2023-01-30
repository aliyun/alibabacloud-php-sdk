<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupResponseBody\appInstanceGroupModel;
use AlibabaCloud\Tea\Model;

class CreateAppInstanceGroupResponseBody extends Model
{
    /**
     * @var appInstanceGroupModel
     */
    public $appInstanceGroupModel;

    /**
     * @example 41730F59-EEF0-53E8-9692-2E82E6721D46
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appInstanceGroupModel' => 'AppInstanceGroupModel',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInstanceGroupModel) {
            $res['AppInstanceGroupModel'] = null !== $this->appInstanceGroupModel ? $this->appInstanceGroupModel->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppInstanceGroupResponseBody
     */
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
