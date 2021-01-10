<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListPreChecksResponseBody\preChecks;
use AlibabaCloud\Tea\Model;

class ListPreChecksResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var preChecks[]
     */
    public $preChecks;
    protected $_name = [
        'requestId' => 'RequestId',
        'preChecks' => 'PreChecks',
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
        if (null !== $this->preChecks) {
            $res['PreChecks'] = [];
            if (null !== $this->preChecks && \is_array($this->preChecks)) {
                $n = 0;
                foreach ($this->preChecks as $item) {
                    $res['PreChecks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPreChecksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PreChecks'])) {
            if (!empty($map['PreChecks'])) {
                $model->preChecks = [];
                $n                = 0;
                foreach ($map['PreChecks'] as $item) {
                    $model->preChecks[$n++] = null !== $item ? preChecks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
