<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMaterialPackageInfoResponseBody\materialPackageInfoList;
use AlibabaCloud\Tea\Model;

class DescribeMaterialPackageInfoResponseBody extends Model
{
    /**
     * @var materialPackageInfoList[]
     */
    public $materialPackageInfoList;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'materialPackageInfoList' => 'MaterialPackageInfoList',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->materialPackageInfoList) {
            $res['MaterialPackageInfoList'] = [];
            if (null !== $this->materialPackageInfoList && \is_array($this->materialPackageInfoList)) {
                $n = 0;
                foreach ($this->materialPackageInfoList as $item) {
                    $res['MaterialPackageInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeMaterialPackageInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaterialPackageInfoList'])) {
            if (!empty($map['MaterialPackageInfoList'])) {
                $model->materialPackageInfoList = [];
                $n                              = 0;
                foreach ($map['MaterialPackageInfoList'] as $item) {
                    $model->materialPackageInfoList[$n++] = null !== $item ? materialPackageInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
