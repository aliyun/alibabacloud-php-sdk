<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListDeployedFunctionsResponseBody\functions;
use AlibabaCloud\Tea\Model;

class ListDeployedFunctionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var functions[]
     */
    public $functions;
    protected $_name = [
        'requestId' => 'RequestId',
        'functions' => 'Functions',
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
        if (null !== $this->functions) {
            $res['Functions'] = [];
            if (null !== $this->functions && \is_array($this->functions)) {
                $n = 0;
                foreach ($this->functions as $item) {
                    $res['Functions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDeployedFunctionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Functions'])) {
            if (!empty($map['Functions'])) {
                $model->functions = [];
                $n                = 0;
                foreach ($map['Functions'] as $item) {
                    $model->functions[$n++] = null !== $item ? functions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
