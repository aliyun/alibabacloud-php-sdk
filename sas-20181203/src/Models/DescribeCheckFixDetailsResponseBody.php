<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckFixDetailsResponseBody\checkFixDetails;
use AlibabaCloud\Tea\Model;

class DescribeCheckFixDetailsResponseBody extends Model
{
    /**
     * @var checkFixDetails[]
     */
    public $checkFixDetails;

    /**
     * @example 20
     *
     * @var int
     */
    public $count;

    /**
     * @example 0DBF1E27-98D8-5EC2-9CF3-4A2E26F6****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'checkFixDetails' => 'CheckFixDetails',
        'count'           => 'Count',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkFixDetails) {
            $res['CheckFixDetails'] = [];
            if (null !== $this->checkFixDetails && \is_array($this->checkFixDetails)) {
                $n = 0;
                foreach ($this->checkFixDetails as $item) {
                    $res['CheckFixDetails'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeCheckFixDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckFixDetails'])) {
            if (!empty($map['CheckFixDetails'])) {
                $model->checkFixDetails = [];
                $n                      = 0;
                foreach ($map['CheckFixDetails'] as $item) {
                    $model->checkFixDetails[$n++] = null !== $item ? checkFixDetails::fromMap($item) : $item;
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
