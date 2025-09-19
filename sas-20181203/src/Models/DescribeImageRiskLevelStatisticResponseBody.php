<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageRiskLevelStatisticResponseBody\imageRiskLevelList;

class DescribeImageRiskLevelStatisticResponseBody extends Model
{
    /**
     * @var imageRiskLevelList[]
     */
    public $imageRiskLevelList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageRiskLevelList' => 'ImageRiskLevelList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->imageRiskLevelList)) {
            Model::validateArray($this->imageRiskLevelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageRiskLevelList) {
            if (\is_array($this->imageRiskLevelList)) {
                $res['ImageRiskLevelList'] = [];
                $n1 = 0;
                foreach ($this->imageRiskLevelList as $item1) {
                    $res['ImageRiskLevelList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageRiskLevelList'])) {
            if (!empty($map['ImageRiskLevelList'])) {
                $model->imageRiskLevelList = [];
                $n1 = 0;
                foreach ($map['ImageRiskLevelList'] as $item1) {
                    $model->imageRiskLevelList[$n1] = imageRiskLevelList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
