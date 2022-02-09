<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageListWithBaselineNameResponseBody\imageInfos;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageListWithBaselineNameResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeImageListWithBaselineNameResponseBody extends Model
{
    /**
     * @var imageInfos[]
     */
    public $imageInfos;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageInfos' => 'ImageInfos',
        'pageInfo'   => 'PageInfo',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageInfos) {
            $res['ImageInfos'] = [];
            if (null !== $this->imageInfos && \is_array($this->imageInfos)) {
                $n = 0;
                foreach ($this->imageInfos as $item) {
                    $res['ImageInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeImageListWithBaselineNameResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageInfos'])) {
            if (!empty($map['ImageInfos'])) {
                $model->imageInfos = [];
                $n                 = 0;
                foreach ($map['ImageInfos'] as $item) {
                    $model->imageInfos[$n++] = null !== $item ? imageInfos::fromMap($item) : $item;
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
