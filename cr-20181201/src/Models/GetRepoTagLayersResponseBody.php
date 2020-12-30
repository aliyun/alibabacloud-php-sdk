<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\SDK\Cr\V20181201\Models\GetRepoTagLayersResponseBody\layers;
use AlibabaCloud\Tea\Model;

class GetRepoTagLayersResponseBody extends Model
{
    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $code;

    /**
     * @var layers[]
     */
    public $layers;
    protected $_name = [
        'isSuccess' => 'IsSuccess',
        'requestId' => 'RequestId',
        'code'      => 'Code',
        'layers'    => 'Layers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->layers) {
            $res['Layers'] = [];
            if (null !== $this->layers && \is_array($this->layers)) {
                $n = 0;
                foreach ($this->layers as $item) {
                    $res['Layers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRepoTagLayersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Layers'])) {
            if (!empty($map['Layers'])) {
                $model->layers = [];
                $n             = 0;
                foreach ($map['Layers'] as $item) {
                    $model->layers[$n++] = null !== $item ? layers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
