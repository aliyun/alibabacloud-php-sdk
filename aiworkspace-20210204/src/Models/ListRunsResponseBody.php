<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class ListRunsResponseBody extends Model
{
    /**
     * @var int
     */
    public $nextPageToken;
    /**
     * @var Run[]
     */
    public $runs;
    /**
     * @var int
     */
    public $totalCount;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nextPageToken' => 'NextPageToken',
        'runs'          => 'Runs',
        'totalCount'    => 'TotalCount',
        'requestId'     => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->runs)) {
            Model::validateArray($this->runs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }

        if (null !== $this->runs) {
            if (\is_array($this->runs)) {
                $res['Runs'] = [];
                $n1          = 0;
                foreach ($this->runs as $item1) {
                    $res['Runs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }

        if (isset($map['Runs'])) {
            if (!empty($map['Runs'])) {
                $model->runs = [];
                $n1          = 0;
                foreach ($map['Runs'] as $item1) {
                    $model->runs[$n1++] = Run::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
