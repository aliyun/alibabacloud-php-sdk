<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListArchitectureAttributeResponseBody\architecture;
use AlibabaCloud\Tea\Model;

class ListArchitectureAttributeResponseBody extends Model
{
    /**
     * @var architecture[]
     */
    public $architecture;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'architecture' => 'Architecture',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architecture) {
            $res['Architecture'] = [];
            if (null !== $this->architecture && \is_array($this->architecture)) {
                $n = 0;
                foreach ($this->architecture as $item) {
                    $res['Architecture'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListArchitectureAttributeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Architecture'])) {
            if (!empty($map['Architecture'])) {
                $model->architecture = [];
                $n                   = 0;
                foreach ($map['Architecture'] as $item) {
                    $model->architecture[$n++] = null !== $item ? architecture::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
