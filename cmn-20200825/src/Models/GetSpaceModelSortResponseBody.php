<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\GetSpaceModelSortResponseBody\spaceModel;
use AlibabaCloud\Tea\Model;

class GetSpaceModelSortResponseBody extends Model
{
    /**
     * @example requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @example {}
     *
     * @var spaceModel[]
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
            $res['SpaceModel'] = [];
            if (null !== $this->spaceModel && \is_array($this->spaceModel)) {
                $n = 0;
                foreach ($this->spaceModel as $item) {
                    $res['SpaceModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSpaceModelSortResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SpaceModel'])) {
            if (!empty($map['SpaceModel'])) {
                $model->spaceModel = [];
                $n                 = 0;
                foreach ($map['SpaceModel'] as $item) {
                    $model->spaceModel[$n++] = null !== $item ? spaceModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
