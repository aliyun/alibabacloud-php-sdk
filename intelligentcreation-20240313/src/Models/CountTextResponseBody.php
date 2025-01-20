<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\CountTextResponseBody\countTextCmdList;

class CountTextResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var countTextCmdList[]
     */
    public $countTextCmdList;
    protected $_name = [
        'requestId'        => 'RequestId',
        'countTextCmdList' => 'countTextCmdList',
    ];

    public function validate()
    {
        if (\is_array($this->countTextCmdList)) {
            Model::validateArray($this->countTextCmdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->countTextCmdList) {
            if (\is_array($this->countTextCmdList)) {
                $res['countTextCmdList'] = [];
                $n1                      = 0;
                foreach ($this->countTextCmdList as $item1) {
                    $res['countTextCmdList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['countTextCmdList'])) {
            if (!empty($map['countTextCmdList'])) {
                $model->countTextCmdList = [];
                $n1                      = 0;
                foreach ($map['countTextCmdList'] as $item1) {
                    $model->countTextCmdList[$n1++] = countTextCmdList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
