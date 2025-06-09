<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cddc\V20200320\Models\ListPrinsSQLErrorLogResponseBody\logList;

class ListPrinsSQLErrorLogResponseBody extends Model
{
    /**
     * @var logList[]
     */
    public $logList;

    /**
     * @var string
     */
    public $logPath;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'logList' => 'LogList',
        'logPath' => 'LogPath',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->logList)) {
            Model::validateArray($this->logList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logList) {
            if (\is_array($this->logList)) {
                $res['LogList'] = [];
                $n1 = 0;
                foreach ($this->logList as $item1) {
                    $res['LogList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->logPath) {
            $res['LogPath'] = $this->logPath;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['LogList'])) {
            if (!empty($map['LogList'])) {
                $model->logList = [];
                $n1 = 0;
                foreach ($map['LogList'] as $item1) {
                    $model->logList[$n1++] = logList::fromMap($item1);
                }
            }
        }

        if (isset($map['LogPath'])) {
            $model->logPath = $map['LogPath'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
