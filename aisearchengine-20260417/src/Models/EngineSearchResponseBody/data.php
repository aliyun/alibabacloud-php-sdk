<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiSearchEngine\V20260417\Models\EngineSearchResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiSearchEngine\V20260417\Models\EngineSearchResponseBody\data\items;

class data extends Model
{
    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var mixed[]
     */
    public $extra;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $total;

    /**
     * @var mixed[]
     */
    public $traceInfo;
    protected $_name = [
        'errorMessage' => 'errorMessage',
        'extra' => 'extra',
        'items' => 'items',
        'page' => 'page',
        'requestId' => 'requestId',
        'size' => 'size',
        'status' => 'status',
        'total' => 'total',
        'traceInfo' => 'traceInfo',
    ];

    public function validate()
    {
        if (\is_array($this->extra)) {
            Model::validateArray($this->extra);
        }
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        if (\is_array($this->traceInfo)) {
            Model::validateArray($this->traceInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->extra) {
            if (\is_array($this->extra)) {
                $res['extra'] = [];
                foreach ($this->extra as $key1 => $value1) {
                    $res['extra'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        if (null !== $this->traceInfo) {
            if (\is_array($this->traceInfo)) {
                $res['traceInfo'] = [];
                foreach ($this->traceInfo as $key1 => $value1) {
                    $res['traceInfo'][$key1] = $value1;
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
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['extra'])) {
            if (!empty($map['extra'])) {
                $model->extra = [];
                foreach ($map['extra'] as $key1 => $value1) {
                    $model->extra[$key1] = $value1;
                }
            }
        }

        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['items'] as $item1) {
                    $model->items[$n1] = items::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        if (isset($map['traceInfo'])) {
            if (!empty($map['traceInfo'])) {
                $model->traceInfo = [];
                foreach ($map['traceInfo'] as $key1 => $value1) {
                    $model->traceInfo[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
