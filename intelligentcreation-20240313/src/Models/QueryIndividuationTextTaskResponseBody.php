<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryIndividuationTextTaskResponseBody\textList;
use AlibabaCloud\Tea\Model;

class QueryIndividuationTextTaskResponseBody extends Model
{
    /**
     * @example yyyy-MM-dd HH:mm:ss
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Id of the request
     *
     * @example 56AC346B-AF40-5E4F-AFFE-FD8BA5E6FB3A
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @var textList[]
     */
    public $textList;

    /**
     * @example yyyy-MM-dd HH:mm:ss
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'createTime',
        'requestId'  => 'requestId',
        'status'     => 'status',
        'textList'   => 'textList',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->textList) {
            $res['textList'] = [];
            if (null !== $this->textList && \is_array($this->textList)) {
                $n = 0;
                foreach ($this->textList as $item) {
                    $res['textList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryIndividuationTextTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['textList'])) {
            if (!empty($map['textList'])) {
                $model->textList = [];
                $n               = 0;
                foreach ($map['textList'] as $item) {
                    $model->textList[$n++] = null !== $item ? textList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
