<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryIndividuationTextTaskResponseBody\textList;

class QueryIndividuationTextTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var textList[]
     */
    public $textList;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'createTime',
        'requestId' => 'requestId',
        'status' => 'status',
        'textList' => 'textList',
        'updateTime' => 'updateTime',
    ];

    public function validate()
    {
        if (\is_array($this->textList)) {
            Model::validateArray($this->textList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->textList)) {
                $res['textList'] = [];
                $n1 = 0;
                foreach ($this->textList as $item1) {
                    $res['textList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
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
                $n1 = 0;
                foreach ($map['textList'] as $item1) {
                    $model->textList[$n1] = textList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        return $model;
    }
}
