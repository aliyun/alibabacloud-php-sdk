<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckResultResponseBody\checkResultList;

class DescribeCheckResultResponseBody extends Model
{
    /**
     * @var checkResultList[]
     */
    public $checkResultList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'checkResultList' => 'CheckResultList',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->checkResultList)) {
            Model::validateArray($this->checkResultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkResultList) {
            if (\is_array($this->checkResultList)) {
                $res['CheckResultList'] = [];
                $n1                     = 0;
                foreach ($this->checkResultList as $item1) {
                    $res['CheckResultList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CheckResultList'])) {
            if (!empty($map['CheckResultList'])) {
                $model->checkResultList = [];
                $n1                     = 0;
                foreach ($map['CheckResultList'] as $item1) {
                    $model->checkResultList[$n1++] = checkResultList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
