<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeCustomerIssueCategoryResponseBody\issueCategoryModelList;
use AlibabaCloud\Tea\Model;

class DescribeCustomerIssueCategoryResponseBody extends Model
{
    /**
     * @var issueCategoryModelList[]
     */
    public $issueCategoryModelList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'issueCategoryModelList' => 'IssueCategoryModelList',
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->issueCategoryModelList) {
            $res['IssueCategoryModelList'] = [];
            if (null !== $this->issueCategoryModelList && \is_array($this->issueCategoryModelList)) {
                $n = 0;
                foreach ($this->issueCategoryModelList as $item) {
                    $res['IssueCategoryModelList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeCustomerIssueCategoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IssueCategoryModelList'])) {
            if (!empty($map['IssueCategoryModelList'])) {
                $model->issueCategoryModelList = [];
                $n                             = 0;
                foreach ($map['IssueCategoryModelList'] as $item) {
                    $model->issueCategoryModelList[$n++] = null !== $item ? issueCategoryModelList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
