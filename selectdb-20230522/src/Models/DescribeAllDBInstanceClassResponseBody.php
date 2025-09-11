<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeAllDBInstanceClassResponseBody\classCodeList;

class DescribeAllDBInstanceClassResponseBody extends Model
{
    /**
     * @var classCodeList[]
     */
    public $classCodeList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'classCodeList' => 'ClassCodeList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->classCodeList)) {
            Model::validateArray($this->classCodeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classCodeList) {
            if (\is_array($this->classCodeList)) {
                $res['ClassCodeList'] = [];
                $n1 = 0;
                foreach ($this->classCodeList as $item1) {
                    $res['ClassCodeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ClassCodeList'])) {
            if (!empty($map['ClassCodeList'])) {
                $model->classCodeList = [];
                $n1 = 0;
                foreach ($map['ClassCodeList'] as $item1) {
                    $model->classCodeList[$n1] = classCodeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
