<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDisposeStrategyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDisposeStrategyResponseBody\data\pageInfo;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDisposeStrategyResponseBody\data\responseData;

class data extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var responseData[]
     */
    public $responseData;
    protected $_name = [
        'pageInfo' => 'PageInfo',
        'responseData' => 'ResponseData',
    ];

    public function validate()
    {
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        if (\is_array($this->responseData)) {
            Model::validateArray($this->responseData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->responseData) {
            if (\is_array($this->responseData)) {
                $res['ResponseData'] = [];
                $n1 = 0;
                foreach ($this->responseData as $item1) {
                    $res['ResponseData'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['ResponseData'])) {
            if (!empty($map['ResponseData'])) {
                $model->responseData = [];
                $n1 = 0;
                foreach ($map['ResponseData'] as $item1) {
                    $model->responseData[$n1++] = responseData::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
