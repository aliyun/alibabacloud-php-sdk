<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedTagsResponseBody\groupedFileds;
use AlibabaCloud\Tea\Model;

class DescribeGroupedTagsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var groupedFileds[]
     */
    public $groupedFileds;

    /**
     * @var int
     */
    public $count;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId'      => 'RequestId',
        'httpStatusCode' => 'HttpStatusCode',
        'groupedFileds'  => 'GroupedFileds',
        'count'          => 'Count',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->groupedFileds) {
            $res['GroupedFileds'] = [];
            if (null !== $this->groupedFileds && \is_array($this->groupedFileds)) {
                $n = 0;
                foreach ($this->groupedFileds as $item) {
                    $res['GroupedFileds'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGroupedTagsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['GroupedFileds'])) {
            if (!empty($map['GroupedFileds'])) {
                $model->groupedFileds = [];
                $n                    = 0;
                foreach ($map['GroupedFileds'] as $item) {
                    $model->groupedFileds[$n++] = null !== $item ? groupedFileds::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
