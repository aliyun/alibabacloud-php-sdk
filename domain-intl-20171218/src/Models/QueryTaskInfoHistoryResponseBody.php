<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models;

use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryTaskInfoHistoryResponseBody\currentPageCursor;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryTaskInfoHistoryResponseBody\nextPageCursor;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryTaskInfoHistoryResponseBody\objects;
use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryTaskInfoHistoryResponseBody\prePageCursor;
use AlibabaCloud\Tea\Model;

class QueryTaskInfoHistoryResponseBody extends Model
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
        'nextPageCursor'    => 'NextPageCursor',
        'objects'           => 'Objects',
        'pageSize'          => 'PageSize',
        'prePageCursor'     => 'PrePageCursor',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPageCursor) {
            $res['CurrentPageCursor'] = null !== $this->currentPageCursor ? $this->currentPageCursor->toMap() : null;
        }
        if (null !== $this->nextPageCursor) {
            $res['NextPageCursor'] = null !== $this->nextPageCursor ? $this->nextPageCursor->toMap() : null;
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->prePageCursor) {
            $res['PrePageCursor'] = null !== $this->prePageCursor ? $this->prePageCursor->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryTaskInfoHistoryResponseBody
     */
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
                $n              = 0;
                foreach ($map['Objects'] as $item) {
                    $model->objects[$n++] = null !== $item ? objects::fromMap($item) : $item;
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
