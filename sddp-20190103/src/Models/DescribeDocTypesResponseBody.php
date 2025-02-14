<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDocTypesResponseBody\docTypeList;

class DescribeDocTypesResponseBody extends Model
{
    /**
     * @var docTypeList[]
     */
    public $docTypeList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'docTypeList' => 'DocTypeList',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->docTypeList)) {
            Model::validateArray($this->docTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docTypeList) {
            if (\is_array($this->docTypeList)) {
                $res['DocTypeList'] = [];
                $n1                 = 0;
                foreach ($this->docTypeList as $item1) {
                    $res['DocTypeList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DocTypeList'])) {
            if (!empty($map['DocTypeList'])) {
                $model->docTypeList = [];
                $n1                 = 0;
                foreach ($map['DocTypeList'] as $item1) {
                    $model->docTypeList[$n1++] = docTypeList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
