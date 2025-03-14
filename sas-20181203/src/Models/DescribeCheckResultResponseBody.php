<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCheckResultResponseBody\checkResultList;
use AlibabaCloud\Tea\Model;

class DescribeCheckResultResponseBody extends Model
{
    /**
     * @description The check results.
     *
     * @var checkResultList[]
     */
    public $checkResultList;

    /**
     * @description The request ID.
     *
     * @example 571B2642-BF51-5BDD-906B-D2340DB9****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'checkResultList' => 'CheckResultList',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkResultList) {
            $res['CheckResultList'] = [];
            if (null !== $this->checkResultList && \is_array($this->checkResultList)) {
                $n = 0;
                foreach ($this->checkResultList as $item) {
                    $res['CheckResultList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeCheckResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckResultList'])) {
            if (!empty($map['CheckResultList'])) {
                $model->checkResultList = [];
                $n = 0;
                foreach ($map['CheckResultList'] as $item) {
                    $model->checkResultList[$n++] = null !== $item ? checkResultList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
