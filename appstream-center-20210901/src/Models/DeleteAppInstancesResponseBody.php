<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppInstancesResponseBody\deleteAppInstanceModels;
use AlibabaCloud\Tea\Model;

class DeleteAppInstancesResponseBody extends Model
{
    /**
     * @var deleteAppInstanceModels[]
     */
    public $deleteAppInstanceModels;

    /**
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deleteAppInstanceModels' => 'DeleteAppInstanceModels',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteAppInstanceModels) {
            $res['DeleteAppInstanceModels'] = [];
            if (null !== $this->deleteAppInstanceModels && \is_array($this->deleteAppInstanceModels)) {
                $n = 0;
                foreach ($this->deleteAppInstanceModels as $item) {
                    $res['DeleteAppInstanceModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAppInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeleteAppInstanceModels'])) {
            if (!empty($map['DeleteAppInstanceModels'])) {
                $model->deleteAppInstanceModels = [];
                $n                              = 0;
                foreach ($map['DeleteAppInstanceModels'] as $item) {
                    $model->deleteAppInstanceModels[$n++] = null !== $item ? deleteAppInstanceModels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
