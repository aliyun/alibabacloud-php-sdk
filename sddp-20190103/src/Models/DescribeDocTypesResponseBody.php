<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDocTypesResponseBody\docTypeList;
use AlibabaCloud\Tea\Model;

class DescribeDocTypesResponseBody extends Model
{
    /**
     * @var docTypeList[]
     */
    public $docTypeList;

    /**
     * @example 769FB3C1-F4C9-4******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'docTypeList' => 'DocTypeList',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docTypeList) {
            $res['DocTypeList'] = [];
            if (null !== $this->docTypeList && \is_array($this->docTypeList)) {
                $n = 0;
                foreach ($this->docTypeList as $item) {
                    $res['DocTypeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDocTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocTypeList'])) {
            if (!empty($map['DocTypeList'])) {
                $model->docTypeList = [];
                $n                  = 0;
                foreach ($map['DocTypeList'] as $item) {
                    $model->docTypeList[$n++] = null !== $item ? docTypeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
