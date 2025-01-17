<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedTagsResponseBody\groupedFileds;

class DescribeGroupedTagsResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;
    /**
     * @var groupedFileds[]
     */
    public $groupedFileds;
    /**
     * @var int
     */
    public $httpStatusCode;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'count'          => 'Count',
        'groupedFileds'  => 'GroupedFileds',
        'httpStatusCode' => 'HttpStatusCode',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->groupedFileds)) {
            Model::validateArray($this->groupedFileds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->groupedFileds) {
            if (\is_array($this->groupedFileds)) {
                $res['GroupedFileds'] = [];
                $n1                   = 0;
                foreach ($this->groupedFileds as $item1) {
                    $res['GroupedFileds'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['GroupedFileds'])) {
            if (!empty($map['GroupedFileds'])) {
                $model->groupedFileds = [];
                $n1                   = 0;
                foreach ($map['GroupedFileds'] as $item1) {
                    $model->groupedFileds[$n1++] = groupedFileds::fromMap($item1);
                }
            }
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
