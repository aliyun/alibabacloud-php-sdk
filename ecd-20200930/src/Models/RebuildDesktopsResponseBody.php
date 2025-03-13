<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\RebuildDesktopsResponseBody\rebuildResults;
use AlibabaCloud\Tea\Model;

class RebuildDesktopsResponseBody extends Model
{
    /**
     * @description The recreation results.
     *
     * @var rebuildResults[]
     */
    public $rebuildResults;

    /**
     * @description The ID of the request.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'rebuildResults' => 'RebuildResults',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rebuildResults) {
            $res['RebuildResults'] = [];
            if (null !== $this->rebuildResults && \is_array($this->rebuildResults)) {
                $n = 0;
                foreach ($this->rebuildResults as $item) {
                    $res['RebuildResults'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return RebuildDesktopsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RebuildResults'])) {
            if (!empty($map['RebuildResults'])) {
                $model->rebuildResults = [];
                $n                     = 0;
                foreach ($map['RebuildResults'] as $item) {
                    $model->rebuildResults[$n++] = null !== $item ? rebuildResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
