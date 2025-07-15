<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\RemoveTerminalsResponseBody\terminals;
use AlibabaCloud\Tea\Model;

class RemoveTerminalsResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4AF8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the users.
     *
     * @var terminals[]
     */
    public $terminals;
    protected $_name = [
        'requestId' => 'RequestId',
        'terminals' => 'Terminals',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->terminals) {
            $res['Terminals'] = [];
            if (null !== $this->terminals && \is_array($this->terminals)) {
                $n = 0;
                foreach ($this->terminals as $item) {
                    $res['Terminals'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveTerminalsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Terminals'])) {
            if (!empty($map['Terminals'])) {
                $model->terminals = [];
                $n = 0;
                foreach ($map['Terminals'] as $item) {
                    $model->terminals[$n++] = null !== $item ? terminals::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
