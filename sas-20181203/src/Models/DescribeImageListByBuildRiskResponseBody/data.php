<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageListByBuildRiskResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageListByBuildRiskResponseBody\data\list_;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageListByBuildRiskResponseBody\data\pageInfo;

class data extends Model
{
    /**
     * @var list_[]
     */
    public $list;
    /**
     * @var pageInfo
     */
    public $pageInfo;
    protected $_name = [
        'list'     => 'List',
        'pageInfo' => 'PageInfo',
    ];

    public function validate()
    {
        if (\is_array($this->list)) {
            Model::validateArray($this->list);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->list) {
            if (\is_array($this->list)) {
                $res['List'] = [];
                $n1          = 0;
                foreach ($this->list as $item1) {
                    $res['List'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
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
        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n1          = 0;
                foreach ($map['List'] as $item1) {
                    $model->list[$n1++] = list_::fromMap($item1);
                }
            }
        }

        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        return $model;
    }
}
