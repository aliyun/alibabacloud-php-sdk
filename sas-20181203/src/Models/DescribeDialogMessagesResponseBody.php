<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDialogMessagesResponseBody\dialogList;
use AlibabaCloud\Tea\Model;

class DescribeDialogMessagesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var dialogList[]
     */
    public $dialogList;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'requestId'  => 'RequestId',
        'dialogList' => 'DialogList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dialogList) {
            $res['DialogList'] = [];
            if (null !== $this->dialogList && \is_array($this->dialogList)) {
                $n = 0;
                foreach ($this->dialogList as $item) {
                    $res['DialogList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDialogMessagesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DialogList'])) {
            if (!empty($map['DialogList'])) {
                $model->dialogList = [];
                $n                 = 0;
                foreach ($map['DialogList'] as $item) {
                    $model->dialogList[$n++] = null !== $item ? dialogList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
