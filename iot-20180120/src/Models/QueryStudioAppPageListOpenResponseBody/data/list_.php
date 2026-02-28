<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryStudioAppPageListOpenResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryStudioAppPageListOpenResponseBody\data\list_\pageInfo;

class list_ extends Model
{
    /**
     * @var pageInfo[]
     */
    public $pageInfo;
    protected $_name = [
        'pageInfo' => 'PageInfo',
    ];

    public function validate()
    {
        if (\is_array($this->pageInfo)) {
            Model::validateArray($this->pageInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageInfo) {
            if (\is_array($this->pageInfo)) {
                $res['PageInfo'] = [];
                $n1 = 0;
                foreach ($this->pageInfo as $item1) {
                    $res['PageInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PageInfo'])) {
            if (!empty($map['PageInfo'])) {
                $model->pageInfo = [];
                $n1 = 0;
                foreach ($map['PageInfo'] as $item1) {
                    $model->pageInfo[$n1] = pageInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
