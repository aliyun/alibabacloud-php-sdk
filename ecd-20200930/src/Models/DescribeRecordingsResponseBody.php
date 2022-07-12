<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRecordingsResponseBody\recordings;
use AlibabaCloud\Tea\Model;

class DescribeRecordingsResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var recordings[]
     */
    public $recordings;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextToken'  => 'NextToken',
        'recordings' => 'Recordings',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->recordings) {
            $res['Recordings'] = [];
            if (null !== $this->recordings && \is_array($this->recordings)) {
                $n = 0;
                foreach ($this->recordings as $item) {
                    $res['Recordings'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeRecordingsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Recordings'])) {
            if (!empty($map['Recordings'])) {
                $model->recordings = [];
                $n                 = 0;
                foreach ($map['Recordings'] as $item) {
                    $model->recordings[$n++] = null !== $item ? recordings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
