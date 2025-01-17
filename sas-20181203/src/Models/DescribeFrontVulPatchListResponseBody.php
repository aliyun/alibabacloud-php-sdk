<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeFrontVulPatchListResponseBody\frontPatchList;

class DescribeFrontVulPatchListResponseBody extends Model
{
    /**
     * @var frontPatchList[]
     */
    public $frontPatchList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'frontPatchList' => 'FrontPatchList',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->frontPatchList)) {
            Model::validateArray($this->frontPatchList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->frontPatchList) {
            if (\is_array($this->frontPatchList)) {
                $res['FrontPatchList'] = [];
                $n1                    = 0;
                foreach ($this->frontPatchList as $item1) {
                    $res['FrontPatchList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FrontPatchList'])) {
            if (!empty($map['FrontPatchList'])) {
                $model->frontPatchList = [];
                $n1                    = 0;
                foreach ($map['FrontPatchList'] as $item1) {
                    $model->frontPatchList[$n1++] = frontPatchList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
