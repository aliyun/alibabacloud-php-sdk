<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\GetSpaceModelInstanceResponseBody\spaceModel;
use AlibabaCloud\Tea\Model;

class GetSpaceModelInstanceResponseBody extends Model
{
    /**
     * @example requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @var spaceModel
     */
    public $spaceModel;
    protected $_name = [
        'requestId'  => 'RequestId',
        'spaceModel' => 'SpaceModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->spaceModel) {
            $res['SpaceModel'] = null !== $this->spaceModel ? $this->spaceModel->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSpaceModelInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SpaceModel'])) {
            $model->spaceModel = spaceModel::fromMap($map['SpaceModel']);
        }

        return $model;
    }
}
