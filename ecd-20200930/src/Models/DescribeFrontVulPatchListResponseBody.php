<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeFrontVulPatchListResponseBody\frontPatchList;
use AlibabaCloud\Tea\Model;

class DescribeFrontVulPatchListResponseBody extends Model
{
    /**
     * @description Details about patches of one or more vulnerabilities before you fix the current vulnerability.
     *
     * @var frontPatchList[]
     */
    public $frontPatchList;

    /**
     * @description The ID of the request.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'frontPatchList' => 'FrontPatchList',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->frontPatchList) {
            $res['FrontPatchList'] = [];
            if (null !== $this->frontPatchList && \is_array($this->frontPatchList)) {
                $n = 0;
                foreach ($this->frontPatchList as $item) {
                    $res['FrontPatchList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeFrontVulPatchListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FrontPatchList'])) {
            if (!empty($map['FrontPatchList'])) {
                $model->frontPatchList = [];
                $n                     = 0;
                foreach ($map['FrontPatchList'] as $item) {
                    $model->frontPatchList[$n++] = null !== $item ? frontPatchList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
