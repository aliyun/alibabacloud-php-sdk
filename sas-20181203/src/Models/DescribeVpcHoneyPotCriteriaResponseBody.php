<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeVpcHoneyPotCriteriaResponseBody\criteriaList;
use AlibabaCloud\Tea\Model;

class DescribeVpcHoneyPotCriteriaResponseBody extends Model
{
    /**
     * @description An array consisting of the search conditions that can be used to query honeypots.
     *
     * @var criteriaList[]
     */
    public $criteriaList;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example FCE38ADB-7361-4212-AD87-A4514E4DF925
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'criteriaList' => 'CriteriaList',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->criteriaList) {
            $res['CriteriaList'] = [];
            if (null !== $this->criteriaList && \is_array($this->criteriaList)) {
                $n = 0;
                foreach ($this->criteriaList as $item) {
                    $res['CriteriaList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeVpcHoneyPotCriteriaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CriteriaList'])) {
            if (!empty($map['CriteriaList'])) {
                $model->criteriaList = [];
                $n                   = 0;
                foreach ($map['CriteriaList'] as $item) {
                    $model->criteriaList[$n++] = null !== $item ? criteriaList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
