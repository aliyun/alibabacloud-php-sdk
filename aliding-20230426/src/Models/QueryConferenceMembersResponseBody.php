<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryConferenceMembersResponseBody\memberModels;

class QueryConferenceMembersResponseBody extends Model
{
    /**
     * @var memberModels[]
     */
    public $memberModels;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'memberModels' => 'memberModels',
        'nextToken'    => 'nextToken',
        'requestId'    => 'requestId',
        'totalCount'   => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->memberModels)) {
            Model::validateArray($this->memberModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->memberModels) {
            if (\is_array($this->memberModels)) {
                $res['memberModels'] = [];
                $n1                  = 0;
                foreach ($this->memberModels as $item1) {
                    $res['memberModels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['memberModels'])) {
            if (!empty($map['memberModels'])) {
                $model->memberModels = [];
                $n1                  = 0;
                foreach ($map['memberModels'] as $item1) {
                    $model->memberModels[$n1++] = memberModels::fromMap($item1);
                }
            }
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
