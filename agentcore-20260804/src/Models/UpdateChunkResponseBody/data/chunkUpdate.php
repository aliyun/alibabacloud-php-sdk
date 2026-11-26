<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateChunkResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateChunkResponseBody\data\chunkUpdate\results;

class chunkUpdate extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $expiresAt;

    /**
     * @var int
     */
    public $failedCount;

    /**
     * @var results[]
     */
    public $results;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'clientToken' => 'clientToken',
        'expiresAt' => 'expiresAt',
        'failedCount' => 'failedCount',
        'results' => 'results',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (\is_array($this->results)) {
            Model::validateArray($this->results);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }

        if (null !== $this->expiresAt) {
            $res['expiresAt'] = $this->expiresAt;
        }

        if (null !== $this->failedCount) {
            $res['failedCount'] = $this->failedCount;
        }

        if (null !== $this->results) {
            if (\is_array($this->results)) {
                $res['results'] = [];
                $n1 = 0;
                foreach ($this->results as $item1) {
                    $res['results'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }

        if (isset($map['expiresAt'])) {
            $model->expiresAt = $map['expiresAt'];
        }

        if (isset($map['failedCount'])) {
            $model->failedCount = $map['failedCount'];
        }

        if (isset($map['results'])) {
            if (!empty($map['results'])) {
                $model->results = [];
                $n1 = 0;
                foreach ($map['results'] as $item1) {
                    $model->results[$n1] = results::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
