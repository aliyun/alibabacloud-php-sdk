<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageRepoListResponseBody\imageRepoList;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageRepoListResponseBody\pageInfo;

class DescribeImageRepoListResponseBody extends Model
{
    /**
     * @var int
     */
    public $addTargetCount;
    /**
     * @var int
     */
    public $allTargetCount;
    /**
     * @var int
     */
    public $delTargetCount;
    /**
     * @var imageRepoList[]
     */
    public $imageRepoList;
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
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
        if (\is_array($this->imageRepoList)) {
            Model::validateArray($this->imageRepoList);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->imageRepoList)) {
                $res['ImageRepoList'] = [];
                $n1                   = 0;
                foreach ($this->imageRepoList as $item1) {
                    $res['ImageRepoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
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
                $n1                   = 0;
                foreach ($map['ImageRepoList'] as $item1) {
                    $model->imageRepoList[$n1++] = imageRepoList::fromMap($item1);
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
