<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchGetProjectTaskResponseBody\resultList;

class BatchGetProjectTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var resultList[]
     */
    public $resultList;
    protected $_name = [
        'requestId'  => 'requestId',
        'resultList' => 'resultList',
    ];

    public function validate()
    {
        if (\is_array($this->resultList)) {
            Model::validateArray($this->resultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->resultList) {
            if (\is_array($this->resultList)) {
                $res['resultList'] = [];
                $n1                = 0;
                foreach ($this->resultList as $item1) {
                    $res['resultList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['resultList'])) {
            if (!empty($map['resultList'])) {
                $model->resultList = [];
                $n1                = 0;
                foreach ($map['resultList'] as $item1) {
                    $model->resultList[$n1++] = resultList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
