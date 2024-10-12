<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class ListRunsResponseBody extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $nextPageToken;

    /**
     * @var Run[]
     */
    public $runs;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description Id of the request
     *
     * @example ADF6D849-*****-7E7030F0CE53
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->runs) {
            $res['Runs'] = [];
            if (null !== $this->runs && \is_array($this->runs)) {
                $n = 0;
                foreach ($this->runs as $item) {
                    $res['Runs'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ListRunsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['Runs'])) {
            if (!empty($map['Runs'])) {
                $model->runs = [];
                $n           = 0;
                foreach ($map['Runs'] as $item) {
                    $model->runs[$n++] = null !== $item ? Run::fromMap($item) : $item;
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
