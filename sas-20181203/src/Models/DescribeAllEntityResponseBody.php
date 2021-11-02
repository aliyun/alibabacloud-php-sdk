<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllEntityResponseBody\entityList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entityList) {
            $res['EntityList'] = [];
            if (null !== $this->entityList && \is_array($this->entityList)) {
                $n = 0;
                foreach ($this->entityList as $item) {
                    $res['EntityList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeAllEntityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EntityList'])) {
            if (!empty($map['EntityList'])) {
                $model->entityList = [];
                $n                 = 0;
                foreach ($map['EntityList'] as $item) {
                    $model->entityList[$n++] = null !== $item ? entityList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
