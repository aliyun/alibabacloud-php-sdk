<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imm\V20200930\Models\ListAttachedOSSBucketsResponseBody\attachedOSSBuckets;

class ListAttachedOSSBucketsResponseBody extends Model
{
    /**
     * @var attachedOSSBuckets[]
     */
    public $attachedOSSBuckets;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'attachedOSSBuckets' => 'AttachedOSSBuckets',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->attachedOSSBuckets)) {
            Model::validateArray($this->attachedOSSBuckets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attachedOSSBuckets) {
            if (\is_array($this->attachedOSSBuckets)) {
                $res['AttachedOSSBuckets'] = [];
                $n1 = 0;
                foreach ($this->attachedOSSBuckets as $item1) {
                    $res['AttachedOSSBuckets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (isset($map['AttachedOSSBuckets'])) {
            if (!empty($map['AttachedOSSBuckets'])) {
                $model->attachedOSSBuckets = [];
                $n1 = 0;
                foreach ($map['AttachedOSSBuckets'] as $item1) {
                    $model->attachedOSSBuckets[$n1] = attachedOSSBuckets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
