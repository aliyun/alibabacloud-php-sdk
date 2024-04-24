<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeDefenseResourceGroupNamesResponseBody extends Model
{
    /**
     * @description The names of the protected object groups.
     *
     * @var string[]
     */
    public $groupNames;

    /**
     * @description The request ID.
     *
     * @example 59DA4258-2F32-5095-B283-57AC****70B3
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 8
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'groupNames' => 'GroupNames',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupNames) {
            $res['GroupNames'] = $this->groupNames;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDefenseResourceGroupNamesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupNames'])) {
            if (!empty($map['GroupNames'])) {
                $model->groupNames = $map['GroupNames'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
