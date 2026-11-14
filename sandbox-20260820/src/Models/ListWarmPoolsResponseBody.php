<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models;

use AlibabaCloud\Dara\Model;

class ListWarmPoolsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var PublicWarmPoolConfig[]
     */
    public $warmPools;
    protected $_name = [
        'code' => 'code',
        'maxResults' => 'maxResults',
        'message' => 'message',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
        'warmPools' => 'warmPools',
    ];

    public function validate()
    {
        if (\is_array($this->warmPools)) {
            Model::validateArray($this->warmPools);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->warmPools) {
            if (\is_array($this->warmPools)) {
                $res['warmPools'] = [];
                $n1 = 0;
                foreach ($this->warmPools as $item1) {
                    $res['warmPools'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['warmPools'])) {
            if (!empty($map['warmPools'])) {
                $model->warmPools = [];
                $n1 = 0;
                foreach ($map['warmPools'] as $item1) {
                    $model->warmPools[$n1] = PublicWarmPoolConfig::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
