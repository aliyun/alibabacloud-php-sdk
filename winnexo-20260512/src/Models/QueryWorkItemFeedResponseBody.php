<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\QueryWorkItemFeedResponseBody\entries;

class QueryWorkItemFeedResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var entries[]
     */
    public $entries;

    /**
     * @var bool
     */
    public $hasMore;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $nextCursor;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $scopeCounts;

    /**
     * @var mixed[]
     */
    public $statusCounts;

    /**
     * @var int
     */
    public $totalEntryCount;

    /**
     * @var int
     */
    public $totalWorkItemCount;
    protected $_name = [
        'code' => 'code',
        'entries' => 'entries',
        'hasMore' => 'hasMore',
        'message' => 'message',
        'nextCursor' => 'nextCursor',
        'requestId' => 'requestId',
        'scopeCounts' => 'scopeCounts',
        'statusCounts' => 'statusCounts',
        'totalEntryCount' => 'totalEntryCount',
        'totalWorkItemCount' => 'totalWorkItemCount',
    ];

    public function validate()
    {
        if (\is_array($this->entries)) {
            Model::validateArray($this->entries);
        }
        if (\is_array($this->scopeCounts)) {
            Model::validateArray($this->scopeCounts);
        }
        if (\is_array($this->statusCounts)) {
            Model::validateArray($this->statusCounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->entries) {
            if (\is_array($this->entries)) {
                $res['entries'] = [];
                $n1 = 0;
                foreach ($this->entries as $item1) {
                    $res['entries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hasMore) {
            $res['hasMore'] = $this->hasMore;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->nextCursor) {
            $res['nextCursor'] = $this->nextCursor;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->scopeCounts) {
            if (\is_array($this->scopeCounts)) {
                $res['scopeCounts'] = [];
                foreach ($this->scopeCounts as $key1 => $value1) {
                    $res['scopeCounts'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->statusCounts) {
            if (\is_array($this->statusCounts)) {
                $res['statusCounts'] = [];
                foreach ($this->statusCounts as $key1 => $value1) {
                    $res['statusCounts'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->totalEntryCount) {
            $res['totalEntryCount'] = $this->totalEntryCount;
        }

        if (null !== $this->totalWorkItemCount) {
            $res['totalWorkItemCount'] = $this->totalWorkItemCount;
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

        if (isset($map['entries'])) {
            if (!empty($map['entries'])) {
                $model->entries = [];
                $n1 = 0;
                foreach ($map['entries'] as $item1) {
                    $model->entries[$n1] = entries::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['hasMore'])) {
            $model->hasMore = $map['hasMore'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['nextCursor'])) {
            $model->nextCursor = $map['nextCursor'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['scopeCounts'])) {
            if (!empty($map['scopeCounts'])) {
                $model->scopeCounts = [];
                foreach ($map['scopeCounts'] as $key1 => $value1) {
                    $model->scopeCounts[$key1] = $value1;
                }
            }
        }

        if (isset($map['statusCounts'])) {
            if (!empty($map['statusCounts'])) {
                $model->statusCounts = [];
                foreach ($map['statusCounts'] as $key1 => $value1) {
                    $model->statusCounts[$key1] = $value1;
                }
            }
        }

        if (isset($map['totalEntryCount'])) {
            $model->totalEntryCount = $map['totalEntryCount'];
        }

        if (isset($map['totalWorkItemCount'])) {
            $model->totalWorkItemCount = $map['totalWorkItemCount'];
        }

        return $model;
    }
}
