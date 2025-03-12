<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAttestorsResponseBody\attestors;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAttestorsResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeAttestorsResponseBody extends Model
{
    /**
     * @description The witnesses.
     *
     * @var attestors[]
     */
    public $attestors;

    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The request ID.
     *
     * @example 7BC55C8F-226E-5AF5-9A2C-2EC43864****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'attestors' => 'Attestors',
        'pageInfo'  => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attestors) {
            $res['Attestors'] = [];
            if (null !== $this->attestors && \is_array($this->attestors)) {
                $n = 0;
                foreach ($this->attestors as $item) {
                    $res['Attestors'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAttestorsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Attestors'])) {
            if (!empty($map['Attestors'])) {
                $model->attestors = [];
                $n                = 0;
                foreach ($map['Attestors'] as $item) {
                    $model->attestors[$n++] = null !== $item ? attestors::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
