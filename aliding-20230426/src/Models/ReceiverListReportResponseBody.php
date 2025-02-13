<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class ReceiverListReportResponseBody extends Model
{
    /**
     * @var bool
     */
    public $hasMore;
    /**
     * @var int
     */
    public $nextCursor;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string[]
     */
    public $useridList;
    protected $_name = [
        'hasMore'    => 'hasMore',
        'nextCursor' => 'nextCursor',
        'requestId'  => 'requestId',
        'useridList' => 'useridList',
    ];

    public function validate()
    {
        if (\is_array($this->useridList)) {
            Model::validateArray($this->useridList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hasMore) {
            $res['hasMore'] = $this->hasMore;
        }

        if (null !== $this->nextCursor) {
            $res['nextCursor'] = $this->nextCursor;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->useridList) {
            if (\is_array($this->useridList)) {
                $res['useridList'] = [];
                $n1                = 0;
                foreach ($this->useridList as $item1) {
                    $res['useridList'][$n1++] = $item1;
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
        if (isset($map['hasMore'])) {
            $model->hasMore = $map['hasMore'];
        }

        if (isset($map['nextCursor'])) {
            $model->nextCursor = $map['nextCursor'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['useridList'])) {
            if (!empty($map['useridList'])) {
                $model->useridList = [];
                $n1                = 0;
                foreach ($map['useridList'] as $item1) {
                    $model->useridList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
