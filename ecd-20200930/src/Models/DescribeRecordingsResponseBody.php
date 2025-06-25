<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeRecordingsResponseBody\recordings;

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
        'nextToken' => 'NextToken',
        'recordings' => 'Recordings',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->recordings)) {
            Model::validateArray($this->recordings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->recordings) {
            if (\is_array($this->recordings)) {
                $res['Recordings'] = [];
                $n1 = 0;
                foreach ($this->recordings as $item1) {
                    $res['Recordings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Recordings'])) {
            if (!empty($map['Recordings'])) {
                $model->recordings = [];
                $n1 = 0;
                foreach ($map['Recordings'] as $item1) {
                    $model->recordings[$n1] = recordings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
