<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetCloudAssetCriteriaResponseBody\criteriaList;
use AlibabaCloud\Tea\Model;

class GetCloudAssetCriteriaResponseBody extends Model
{
    /**
     * @description The values of the search condition. This parameter is returned only if the value of **Type** is **select**.
     *
     * >  If the value of **Type** is **input**, the value of this parameter is an empty string.
     * @var criteriaList[]
     */
    public $criteriaList;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 24A20733-10A0-4AF6-BE6B-E3322413BB68
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
     * @return GetCloudAssetCriteriaResponseBody
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
