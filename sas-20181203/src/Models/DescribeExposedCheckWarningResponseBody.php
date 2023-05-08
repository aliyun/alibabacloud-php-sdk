<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedCheckWarningResponseBody\warningList;
use AlibabaCloud\Tea\Model;

class DescribeExposedCheckWarningResponseBody extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $count;

    /**
     * @example 6D9CDB47-6191-4415-BE63-7E8B12CD****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var warningList[]
     */
    public $warningList;
    protected $_name = [
        'count'       => 'Count',
        'requestId'   => 'RequestId',
        'warningList' => 'WarningList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->warningList) {
            $res['WarningList'] = [];
            if (null !== $this->warningList && \is_array($this->warningList)) {
                $n = 0;
                foreach ($this->warningList as $item) {
                    $res['WarningList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExposedCheckWarningResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WarningList'])) {
            if (!empty($map['WarningList'])) {
                $model->warningList = [];
                $n                  = 0;
                foreach ($map['WarningList'] as $item) {
                    $model->warningList[$n++] = null !== $item ? warningList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
