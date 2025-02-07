<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClustersForRegionResponseBody\clusters;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClustersForRegionResponseBody\pageInfo;

class DescribeClustersForRegionResponseBody extends Model
{
    /**
     * @var clusters[]
     */
    public $clusters;
    /**
     * @var pageInfo
     */
    public $pageInfo;
    protected $_name = [
        'clusters' => 'clusters',
        'pageInfo' => 'page_info',
    ];

    public function validate()
    {
        if (\is_array($this->clusters)) {
            Model::validateArray($this->clusters);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusters) {
            if (\is_array($this->clusters)) {
                $res['clusters'] = [];
                $n1              = 0;
                foreach ($this->clusters as $item1) {
                    $res['clusters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['page_info'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
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
        if (isset($map['clusters'])) {
            if (!empty($map['clusters'])) {
                $model->clusters = [];
                $n1              = 0;
                foreach ($map['clusters'] as $item1) {
                    $model->clusters[$n1++] = clusters::fromMap($item1);
                }
            }
        }

        if (isset($map['page_info'])) {
            $model->pageInfo = pageInfo::fromMap($map['page_info']);
        }

        return $model;
    }
}
