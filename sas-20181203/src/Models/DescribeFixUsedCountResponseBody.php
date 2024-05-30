<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeFixUsedCountResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example CB1CE824-7F80-546D-8AF8-4A5209F9B698
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of vulnerabilities that are fixed by the vulnerability fixing feature.
     *
     * @example 10
     *
     * @var int
     */
    public $usedCount;

    /**
     * @description The number of vulnerabilities that are fixed by the vulnerability fixing feature in China.
     *
     * @example 5
     *
     * @var int
     */
    public $usedCountCn;

    /**
     * @description The number of vulnerabilities that are fixed by the vulnerability fixing feature outside China.
     *
     * @example 5
     *
     * @var int
     */
    public $usedCountSg;
    protected $_name = [
        'requestId'   => 'RequestId',
        'usedCount'   => 'UsedCount',
        'usedCountCn' => 'UsedCountCn',
        'usedCountSg' => 'UsedCountSg',
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
        if (null !== $this->usedCount) {
            $res['UsedCount'] = $this->usedCount;
        }
        if (null !== $this->usedCountCn) {
            $res['UsedCountCn'] = $this->usedCountCn;
        }
        if (null !== $this->usedCountSg) {
            $res['UsedCountSg'] = $this->usedCountSg;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFixUsedCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UsedCount'])) {
            $model->usedCount = $map['UsedCount'];
        }
        if (isset($map['UsedCountCn'])) {
            $model->usedCountCn = $map['UsedCountCn'];
        }
        if (isset($map['UsedCountSg'])) {
            $model->usedCountSg = $map['UsedCountSg'];
        }

        return $model;
    }
}
