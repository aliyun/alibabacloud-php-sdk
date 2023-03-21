<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageInstancesResponseBody\imageInstanceList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageInstancesResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeImageInstancesResponseBody extends Model
{
    /**
     * @description An array that consists of the information about the image.
     *
     * @var imageInstanceList[]
     */
    public $imageInstanceList;

    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example BE120DAB-F4E7-4C53-ADC3-A97578ABF384
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageInstanceList' => 'ImageInstanceList',
        'pageInfo'          => 'PageInfo',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageInstanceList) {
            $res['ImageInstanceList'] = [];
            if (null !== $this->imageInstanceList && \is_array($this->imageInstanceList)) {
                $n = 0;
                foreach ($this->imageInstanceList as $item) {
                    $res['ImageInstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageInstancesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageInstanceList'])) {
            if (!empty($map['ImageInstanceList'])) {
                $model->imageInstanceList = [];
                $n                        = 0;
                foreach ($map['ImageInstanceList'] as $item) {
                    $model->imageInstanceList[$n++] = null !== $item ? imageInstanceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
