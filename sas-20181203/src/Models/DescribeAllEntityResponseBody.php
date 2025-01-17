<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllEntityResponseBody\entityList;

class DescribeAllEntityResponseBody extends Model
{
    /**
     * @var entityList[]
     */
    public $entityList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'entityList' => 'EntityList',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->entityList)) {
            Model::validateArray($this->entityList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityList) {
            if (\is_array($this->entityList)) {
                $res['EntityList'] = [];
                $n1                = 0;
                foreach ($this->entityList as $item1) {
                    $res['EntityList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['EntityList'])) {
            if (!empty($map['EntityList'])) {
                $model->entityList = [];
                $n1                = 0;
                foreach ($map['EntityList'] as $item1) {
                    $model->entityList[$n1++] = entityList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
