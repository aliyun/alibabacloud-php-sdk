<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\ListTerminalCommandsResponseBody\terminalCommandList;

class ListTerminalCommandsResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var terminalCommandList[]
     */
    public $terminalCommandList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'terminalCommandList' => 'TerminalCommandList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->terminalCommandList)) {
            Model::validateArray($this->terminalCommandList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->terminalCommandList)) {
                $res['TerminalCommandList'] = [];
                $n1 = 0;
                foreach ($this->terminalCommandList as $item1) {
                    $res['TerminalCommandList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
                $n1 = 0;
                foreach ($map['TerminalCommandList'] as $item1) {
                    $model->terminalCommandList[$n1] = terminalCommandList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
