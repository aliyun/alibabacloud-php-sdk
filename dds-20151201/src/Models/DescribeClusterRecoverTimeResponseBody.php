<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeClusterRecoverTimeResponseBody\restoreRanges;

class DescribeClusterRecoverTimeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var restoreRanges[]
     */
    public $restoreRanges;
    protected $_name = [
        'requestId'     => 'RequestId',
        'restoreRanges' => 'RestoreRanges',
    ];

    public function validate()
    {
        if (\is_array($this->restoreRanges)) {
            Model::validateArray($this->restoreRanges);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->restoreRanges) {
            if (\is_array($this->restoreRanges)) {
                $res['RestoreRanges'] = [];
                $n1                   = 0;
                foreach ($this->restoreRanges as $item1) {
                    $res['RestoreRanges'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RestoreRanges'])) {
            if (!empty($map['RestoreRanges'])) {
                $model->restoreRanges = [];
                $n1                   = 0;
                foreach ($map['RestoreRanges'] as $item1) {
                    $model->restoreRanges[$n1++] = restoreRanges::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
