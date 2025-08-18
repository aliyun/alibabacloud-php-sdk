<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServicePublishedApisResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServicePublishedApisResponseBody\pageResult\apiList;

class pageResult extends Model
{
    /**
     * @var apiList[]
     */
    public $apiList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'apiList' => 'ApiList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->apiList)) {
            Model::validateArray($this->apiList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiList) {
            if (\is_array($this->apiList)) {
                $res['ApiList'] = [];
                $n1 = 0;
                foreach ($this->apiList as $item1) {
                    $res['ApiList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['ApiList'])) {
            if (!empty($map['ApiList'])) {
                $model->apiList = [];
                $n1 = 0;
                foreach ($map['ApiList'] as $item1) {
                    $model->apiList[$n1] = apiList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
