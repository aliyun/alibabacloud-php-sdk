<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageRepoDetailListResponseBody\imageRepoResponses;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageRepoDetailListResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeImageRepoDetailListResponseBody extends Model
{
    /**
     * @description An array that consists of the information about image repositories.
     *
     * @var imageRepoResponses[]
     */
    public $imageRepoResponses;

    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 0B48AB3C-84FC-424D-A01D-B9270EF46038
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageRepoResponses' => 'ImageRepoResponses',
        'pageInfo'           => 'PageInfo',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageRepoResponses) {
            $res['ImageRepoResponses'] = [];
            if (null !== $this->imageRepoResponses && \is_array($this->imageRepoResponses)) {
                $n = 0;
                foreach ($this->imageRepoResponses as $item) {
                    $res['ImageRepoResponses'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeImageRepoDetailListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageRepoResponses'])) {
            if (!empty($map['ImageRepoResponses'])) {
                $model->imageRepoResponses = [];
                $n                         = 0;
                foreach ($map['ImageRepoResponses'] as $item) {
                    $model->imageRepoResponses[$n++] = null !== $item ? imageRepoResponses::fromMap($item) : $item;
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
