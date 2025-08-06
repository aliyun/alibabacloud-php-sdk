<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryUserHonorsResponseBody\honors;

class QueryUserHonorsResponseBody extends Model
{
    /**
     * @var honors[]
     */
    public $honors;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'honors' => 'honors',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->honors)) {
            Model::validateArray($this->honors);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->honors) {
            if (\is_array($this->honors)) {
                $res['honors'] = [];
                $n1 = 0;
                foreach ($this->honors as $item1) {
                    $res['honors'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['honors'])) {
            if (!empty($map['honors'])) {
                $model->honors = [];
                $n1 = 0;
                foreach ($map['honors'] as $item1) {
                    $model->honors[$n1] = honors::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
