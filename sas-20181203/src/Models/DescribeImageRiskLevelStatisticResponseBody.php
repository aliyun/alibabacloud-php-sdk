<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageRiskLevelStatisticResponseBody\imageRiskLevelList;
use AlibabaCloud\Tea\Model;

class DescribeImageRiskLevelStatisticResponseBody extends Model
{
    /**
     * @description Risk information at the image level, including risks from vulnerability, baseline, and malicious file detection.
     *
     * @var imageRiskLevelList[]
     */
    public $imageRiskLevelList;

    /**
     * @description The ID of this call request, which is a unique identifier generated by Alibaba Cloud for this request and can be used to troubleshoot and locate issues.
     *
     * @example A60DA4EC-7CD8-577D-AD73-******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageRiskLevelList' => 'ImageRiskLevelList',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageRiskLevelList) {
            $res['ImageRiskLevelList'] = [];
            if (null !== $this->imageRiskLevelList && \is_array($this->imageRiskLevelList)) {
                $n = 0;
                foreach ($this->imageRiskLevelList as $item) {
                    $res['ImageRiskLevelList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeImageRiskLevelStatisticResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageRiskLevelList'])) {
            if (!empty($map['ImageRiskLevelList'])) {
                $model->imageRiskLevelList = [];
                $n = 0;
                foreach ($map['ImageRiskLevelList'] as $item) {
                    $model->imageRiskLevelList[$n++] = null !== $item ? imageRiskLevelList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
