<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eipanycast\V20200309\Models;

use AlibabaCloud\SDK\Eipanycast\V20200309\Models\DescribeAnycastPopLocationsResponseBody\anycastPopLocationList;
use AlibabaCloud\Tea\Model;

class DescribeAnycastPopLocationsResponseBody extends Model
{
    /**
     * @var anycastPopLocationList[]
     */
    public $anycastPopLocationList;

    /**
     * @var string
     */
    public $count;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'anycastPopLocationList' => 'AnycastPopLocationList',
        'count'                  => 'Count',
        'requestId'              => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->anycastPopLocationList) {
            $res['AnycastPopLocationList'] = [];
            if (null !== $this->anycastPopLocationList && \is_array($this->anycastPopLocationList)) {
                $n = 0;
                foreach ($this->anycastPopLocationList as $item) {
                    $res['AnycastPopLocationList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAnycastPopLocationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnycastPopLocationList'])) {
            if (!empty($map['AnycastPopLocationList'])) {
                $model->anycastPopLocationList = [];
                $n                             = 0;
                foreach ($map['AnycastPopLocationList'] as $item) {
                    $model->anycastPopLocationList[$n++] = null !== $item ? anycastPopLocationList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
