<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeIdcAssetCriteriaResponseBody\criteriaList;
use AlibabaCloud\Tea\Model;

class DescribeIdcAssetCriteriaResponseBody extends Model
{
    /**
     * @description The information about the asset search conditions.
     *
     * @var criteriaList[]
     */
    public $criteriaList;

    /**
     * @description The request ID.
     *
     * @example 11C96623-E106-59C9-866D-A6C82911****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'criteriaList' => 'CriteriaList',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

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
     * @return DescribeIdcAssetCriteriaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CriteriaList'])) {
            if (!empty($map['CriteriaList'])) {
                $model->criteriaList = [];
                $n = 0;
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
