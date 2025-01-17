<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListImageRiskResponseBody\imageRiskList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListImageRiskResponseBody\pageInfo;

class ListImageRiskResponseBody extends Model
{
    /**
     * @var imageRiskList[]
     */
    public $imageRiskList;
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'imageRiskList' => 'ImageRiskList',
        'pageInfo'      => 'PageInfo',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->imageRiskList)) {
            Model::validateArray($this->imageRiskList);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageRiskList) {
            if (\is_array($this->imageRiskList)) {
                $res['ImageRiskList'] = [];
                $n1                   = 0;
                foreach ($this->imageRiskList as $item1) {
                    $res['ImageRiskList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ImageRiskList'])) {
            if (!empty($map['ImageRiskList'])) {
                $model->imageRiskList = [];
                $n1                   = 0;
                foreach ($map['ImageRiskList'] as $item1) {
                    $model->imageRiskList[$n1++] = imageRiskList::fromMap($item1);
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
