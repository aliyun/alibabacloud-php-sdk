<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeClusterRecoverTimeResponseBody\restoreRanges;
use AlibabaCloud\Tea\Model;

class DescribeClusterRecoverTimeResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 60EEBD77-227C-5B39-86EA-D89163C5****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The cluster backup sets of the instance. A cluster backup file contains the backup sets of each node.
     *
     * @var restoreRanges[]
     */
    public $restoreRanges;
    protected $_name = [
        'requestId'     => 'RequestId',
        'restoreRanges' => 'RestoreRanges',
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
        if (null !== $this->restoreRanges) {
            $res['RestoreRanges'] = [];
            if (null !== $this->restoreRanges && \is_array($this->restoreRanges)) {
                $n = 0;
                foreach ($this->restoreRanges as $item) {
                    $res['RestoreRanges'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterRecoverTimeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RestoreRanges'])) {
            if (!empty($map['RestoreRanges'])) {
                $model->restoreRanges = [];
                $n                    = 0;
                foreach ($map['RestoreRanges'] as $item) {
                    $model->restoreRanges[$n++] = null !== $item ? restoreRanges::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
