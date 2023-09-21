<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAttachRecordsResponseBody\accessList;
use AlibabaCloud\Tea\Model;

class DescribeAttachRecordsResponseBody extends Model
{
    /**
     * @description The results of automatically connecting applications on the ECS instance to the application protection feature.
     *
     * @var accessList[]
     */
    public $accessList;

    /**
     * @description The request ID.
     *
     * @example 9F4E6157-9600-5588-86B9-38F09067****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessList' => 'AccessList',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessList) {
            $res['AccessList'] = [];
            if (null !== $this->accessList && \is_array($this->accessList)) {
                $n = 0;
                foreach ($this->accessList as $item) {
                    $res['AccessList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeAttachRecordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessList'])) {
            if (!empty($map['AccessList'])) {
                $model->accessList = [];
                $n                 = 0;
                foreach ($map['AccessList'] as $item) {
                    $model->accessList[$n++] = null !== $item ? accessList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
