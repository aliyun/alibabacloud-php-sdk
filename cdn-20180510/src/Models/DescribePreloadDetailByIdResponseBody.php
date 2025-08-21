<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribePreloadDetailByIdResponseBody\urlDetails;

class DescribePreloadDetailByIdResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var urlDetails[]
     */
    public $urlDetails;
    protected $_name = [
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'urlDetails' => 'UrlDetails',
    ];

    public function validate()
    {
        if (\is_array($this->urlDetails)) {
            Model::validateArray($this->urlDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->urlDetails) {
            if (\is_array($this->urlDetails)) {
                $res['UrlDetails'] = [];
                $n1 = 0;
                foreach ($this->urlDetails as $item1) {
                    $res['UrlDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['UrlDetails'])) {
            if (!empty($map['UrlDetails'])) {
                $model->urlDetails = [];
                $n1 = 0;
                foreach ($map['UrlDetails'] as $item1) {
                    $model->urlDetails[$n1] = urlDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
