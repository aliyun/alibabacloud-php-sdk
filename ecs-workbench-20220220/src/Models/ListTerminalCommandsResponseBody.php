<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models;

use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\ListTerminalCommandsResponseBody\terminalCommandList;
use AlibabaCloud\Tea\Model;

class ListTerminalCommandsResponseBody extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var terminalCommandList[]
     */
    public $terminalCommandList;

    /**
     * @example 3
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'requestId'           => 'RequestId',
        'terminalCommandList' => 'TerminalCommandList',
        'totalCount'          => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->terminalCommandList) {
            $res['TerminalCommandList'] = [];
            if (null !== $this->terminalCommandList && \is_array($this->terminalCommandList)) {
                $n = 0;
                foreach ($this->terminalCommandList as $item) {
                    $res['TerminalCommandList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTerminalCommandsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TerminalCommandList'])) {
            if (!empty($map['TerminalCommandList'])) {
                $model->terminalCommandList = [];
                $n                          = 0;
                foreach ($map['TerminalCommandList'] as $item) {
                    $model->terminalCommandList[$n++] = null !== $item ? terminalCommandList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
