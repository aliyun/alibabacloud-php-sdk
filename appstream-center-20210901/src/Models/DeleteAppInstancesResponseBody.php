<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DeleteAppInstancesResponseBody\deleteAppInstanceModels;

class DeleteAppInstancesResponseBody extends Model
{
    /**
     * @var deleteAppInstanceModels[]
     */
    public $deleteAppInstanceModels;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deleteAppInstanceModels' => 'DeleteAppInstanceModels',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->deleteAppInstanceModels)) {
            Model::validateArray($this->deleteAppInstanceModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deleteAppInstanceModels) {
            if (\is_array($this->deleteAppInstanceModels)) {
                $res['DeleteAppInstanceModels'] = [];
                $n1                             = 0;
                foreach ($this->deleteAppInstanceModels as $item1) {
                    $res['DeleteAppInstanceModels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['DeleteAppInstanceModels'])) {
            if (!empty($map['DeleteAppInstanceModels'])) {
                $model->deleteAppInstanceModels = [];
                $n1                             = 0;
                foreach ($map['DeleteAppInstanceModels'] as $item1) {
                    $model->deleteAppInstanceModels[$n1++] = deleteAppInstanceModels::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
