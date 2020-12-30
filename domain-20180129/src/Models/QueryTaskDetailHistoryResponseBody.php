<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTaskDetailHistoryResponseBody\currentPageCursor;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTaskDetailHistoryResponseBody\nextPageCursor;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTaskDetailHistoryResponseBody\objects;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryTaskDetailHistoryResponseBody\prePageCursor;
use AlibabaCloud\Tea\Model;

class QueryTaskDetailHistoryResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var currentPageCursor
     */
    public $currentPageCursor;

    /**
     * @var objects[]
     */
    public $objects;

    /**
     * @var prePageCursor
     */
    public $prePageCursor;

    /**
     * @var nextPageCursor
     */
    public $nextPageCursor;
    protected $_name = [
        'pageSize'          => 'PageSize',
        'requestId'         => 'RequestId',
        'currentPageCursor' => 'CurrentPageCursor',
        'objects'           => 'Objects',
        'prePageCursor'     => 'PrePageCursor',
        'nextPageCursor'    => 'NextPageCursor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->currentPageCursor) {
            $res['CurrentPageCursor'] = null !== $this->currentPageCursor ? $this->currentPageCursor->toMap() : null;
        }
        if (null !== $this->objects) {
            $res['Objects'] = [];
            if (null !== $this->objects && \is_array($this->objects)) {
                $n = 0;
                foreach ($this->objects as $item) {
                    $res['Objects'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->prePageCursor) {
            $res['PrePageCursor'] = null !== $this->prePageCursor ? $this->prePageCursor->toMap() : null;
        }
        if (null !== $this->nextPageCursor) {
            $res['NextPageCursor'] = null !== $this->nextPageCursor ? $this->nextPageCursor->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTaskDetailHistoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CurrentPageCursor'])) {
            $model->currentPageCursor = currentPageCursor::fromMap($map['CurrentPageCursor']);
        }
        if (isset($map['Objects'])) {
            if (!empty($map['Objects'])) {
                $model->objects = [];
                $n              = 0;
                foreach ($map['Objects'] as $item) {
                    $model->objects[$n++] = null !== $item ? objects::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PrePageCursor'])) {
            $model->prePageCursor = prePageCursor::fromMap($map['PrePageCursor']);
        }
        if (isset($map['NextPageCursor'])) {
            $model->nextPageCursor = nextPageCursor::fromMap($map['NextPageCursor']);
        }

        return $model;
    }
}
