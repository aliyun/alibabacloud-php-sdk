<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageRepoListResponseBody\imageRepoList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageRepoListResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class DescribeImageRepoListResponseBody extends Model
{
    /**
     * @description The number of image repositories that are added to Security Center.
     *
     * @example 20
     *
     * @var int
     */
    public $addTargetCount;

    /**
     * @description The total number of image repositories.
     *
     * @example 25
     *
     * @var int
     */
    public $allTargetCount;

    /**
     * @description The number of excluded image repositories.
     *
     * @example 5
     *
     * @var int
     */
    public $delTargetCount;

    /**
     * @description An array that consists of the information about image repositories.
     *
     * @var imageRepoList[]
     */
    public $imageRepoList;

    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example A4EB8B1C-1DEC-5E18-BCD0-D1BBB3936FA7
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'addTargetCount' => 'AddTargetCount',
        'allTargetCount' => 'AllTargetCount',
        'delTargetCount' => 'DelTargetCount',
        'imageRepoList'  => 'ImageRepoList',
        'pageInfo'       => 'PageInfo',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addTargetCount) {
            $res['AddTargetCount'] = $this->addTargetCount;
        }
        if (null !== $this->allTargetCount) {
            $res['AllTargetCount'] = $this->allTargetCount;
        }
        if (null !== $this->delTargetCount) {
            $res['DelTargetCount'] = $this->delTargetCount;
        }
        if (null !== $this->imageRepoList) {
            $res['ImageRepoList'] = [];
            if (null !== $this->imageRepoList && \is_array($this->imageRepoList)) {
                $n = 0;
                foreach ($this->imageRepoList as $item) {
                    $res['ImageRepoList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeImageRepoListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddTargetCount'])) {
            $model->addTargetCount = $map['AddTargetCount'];
        }
        if (isset($map['AllTargetCount'])) {
            $model->allTargetCount = $map['AllTargetCount'];
        }
        if (isset($map['DelTargetCount'])) {
            $model->delTargetCount = $map['DelTargetCount'];
        }
        if (isset($map['ImageRepoList'])) {
            if (!empty($map['ImageRepoList'])) {
                $model->imageRepoList = [];
                $n                    = 0;
                foreach ($map['ImageRepoList'] as $item) {
                    $model->imageRepoList[$n++] = null !== $item ? imageRepoList::fromMap($item) : $item;
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
