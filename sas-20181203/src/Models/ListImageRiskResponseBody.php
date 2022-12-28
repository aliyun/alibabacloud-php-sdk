<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListImageRiskResponseBody\imageRiskList;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListImageRiskResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageRiskList) {
            $res['ImageRiskList'] = [];
            if (null !== $this->imageRiskList && \is_array($this->imageRiskList)) {
                $n = 0;
                foreach ($this->imageRiskList as $item) {
                    $res['ImageRiskList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListImageRiskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageRiskList'])) {
            if (!empty($map['ImageRiskList'])) {
                $model->imageRiskList = [];
                $n                    = 0;
                foreach ($map['ImageRiskList'] as $item) {
                    $model->imageRiskList[$n++] = null !== $item ? imageRiskList::fromMap($item) : $item;
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
