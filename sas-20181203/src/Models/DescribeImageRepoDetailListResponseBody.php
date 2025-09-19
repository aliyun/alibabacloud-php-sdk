<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageRepoDetailListResponseBody\imageRepoResponses;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageRepoDetailListResponseBody\pageInfo;

class DescribeImageRepoDetailListResponseBody extends Model
{
    /**
     * @var imageRepoResponses[]
     */
    public $imageRepoResponses;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageRepoResponses' => 'ImageRepoResponses',
        'pageInfo' => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->imageRepoResponses)) {
            Model::validateArray($this->imageRepoResponses);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageRepoResponses) {
            if (\is_array($this->imageRepoResponses)) {
                $res['ImageRepoResponses'] = [];
                $n1 = 0;
                foreach ($this->imageRepoResponses as $item1) {
                    $res['ImageRepoResponses'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ImageRepoResponses'])) {
            if (!empty($map['ImageRepoResponses'])) {
                $model->imageRepoResponses = [];
                $n1 = 0;
                foreach ($map['ImageRepoResponses'] as $item1) {
                    $model->imageRepoResponses[$n1] = imageRepoResponses::fromMap($item1);
                    ++$n1;
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
