<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFrontVulPatchListResponseBody\frontPatchList;
use AlibabaCloud\Tea\Model;

class DescribeFrontVulPatchListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var frontPatchList[]
     */
    public $frontPatchList;
    protected $_name = [
        'requestId'      => 'RequestId',
        'frontPatchList' => 'FrontPatchList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->frontPatchList) {
            $res['FrontPatchList'] = [];
            if (null !== $this->frontPatchList && \is_array($this->frontPatchList)) {
                $n = 0;
                foreach ($this->frontPatchList as $item) {
                    $res['FrontPatchList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFrontVulPatchListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['FrontPatchList'])) {
            if (!empty($map['FrontPatchList'])) {
                $model->frontPatchList = [];
                $n                     = 0;
                foreach ($map['FrontPatchList'] as $item) {
                    $model->frontPatchList[$n++] = null !== $item ? frontPatchList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
