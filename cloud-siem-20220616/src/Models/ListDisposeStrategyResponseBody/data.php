<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDisposeStrategyResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDisposeStrategyResponseBody\data\groups;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDisposeStrategyResponseBody\data\pageInfo;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDisposeStrategyResponseBody\data\responseData;

class data extends Model
{
    /**
     * @var groups[]
     */
    public $groups;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var responseData[]
     */
    public $responseData;
    protected $_name = [
        'groups' => 'Groups',
        'pageInfo' => 'PageInfo',
        'responseData' => 'ResponseData',
    ];

    public function validate()
    {
        if (\is_array($this->groups)) {
            Model::validateArray($this->groups);
        }
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
        if (null !== $this->groups) {
            if (\is_array($this->groups)) {
                $res['Groups'] = [];
                $n1 = 0;
                foreach ($this->groups as $item1) {
                    $res['Groups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->responseData) {
            if (\is_array($this->responseData)) {
                $res['ResponseData'] = [];
                $n1 = 0;
                foreach ($this->responseData as $item1) {
                    $res['ResponseData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['Groups'])) {
            if (!empty($map['Groups'])) {
                $model->groups = [];
                $n1 = 0;
                foreach ($map['Groups'] as $item1) {
                    $model->groups[$n1] = groups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['ResponseData'])) {
            if (!empty($map['ResponseData'])) {
                $model->responseData = [];
                $n1 = 0;
                foreach ($map['ResponseData'] as $item1) {
                    $model->responseData[$n1] = responseData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
