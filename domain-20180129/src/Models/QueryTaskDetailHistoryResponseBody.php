<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTaskDetailHistoryResponseBody\currentPageCursor;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTaskDetailHistoryResponseBody\nextPageCursor;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTaskDetailHistoryResponseBody\objects;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTaskDetailHistoryResponseBody\prePageCursor;

class QueryTaskDetailHistoryResponseBody extends Model
{
    /**
     * @var currentPageCursor
     */
    public $currentPageCursor;

    /**
     * @var nextPageCursor
     */
    public $nextPageCursor;

    /**
     * @var objects[]
     */
    public $objects;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var prePageCursor
     */
    public $prePageCursor;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'currentPageCursor' => 'CurrentPageCursor',
        'nextPageCursor' => 'NextPageCursor',
        'objects' => 'Objects',
        'pageSize' => 'PageSize',
        'prePageCursor' => 'PrePageCursor',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->currentPageCursor) {
            $this->currentPageCursor->validate();
        }
        if (null !== $this->nextPageCursor) {
            $this->nextPageCursor->validate();
        }
        if (\is_array($this->objects)) {
            Model::validateArray($this->objects);
        }
        if (null !== $this->prePageCursor) {
            $this->prePageCursor->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPageCursor) {
            $res['CurrentPageCursor'] = null !== $this->currentPageCursor ? $this->currentPageCursor->toArray($noStream) : $this->currentPageCursor;
        }

        if (null !== $this->nextPageCursor) {
            $res['NextPageCursor'] = null !== $this->nextPageCursor ? $this->nextPageCursor->toArray($noStream) : $this->nextPageCursor;
        }

        if (null !== $this->objects) {
            if (\is_array($this->objects)) {
                $res['Objects'] = [];
                $n1 = 0;
                foreach ($this->objects as $item1) {
                    $res['Objects'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->prePageCursor) {
            $res['PrePageCursor'] = null !== $this->prePageCursor ? $this->prePageCursor->toArray($noStream) : $this->prePageCursor;
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
        if (isset($map['CurrentPageCursor'])) {
            $model->currentPageCursor = currentPageCursor::fromMap($map['CurrentPageCursor']);
        }

        if (isset($map['NextPageCursor'])) {
            $model->nextPageCursor = nextPageCursor::fromMap($map['NextPageCursor']);
        }

        if (isset($map['Objects'])) {
            if (!empty($map['Objects'])) {
                $model->objects = [];
                $n1 = 0;
                foreach ($map['Objects'] as $item1) {
                    $model->objects[$n1] = objects::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PrePageCursor'])) {
            $model->prePageCursor = prePageCursor::fromMap($map['PrePageCursor']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
