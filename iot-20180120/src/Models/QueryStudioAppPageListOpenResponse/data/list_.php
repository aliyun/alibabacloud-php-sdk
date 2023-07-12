<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryStudioAppPageListOpenResponse\data;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryStudioAppPageListOpenResponse\data\list_\pageInfo;
use AlibabaCloud\Tea\Model;

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
        Model::validateRequired('pageInfo', $this->pageInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = [];
            if (null !== $this->pageInfo && \is_array($this->pageInfo)) {
                $n = 0;
                foreach ($this->pageInfo as $item) {
                    $res['PageInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageInfo'])) {
            if (!empty($map['PageInfo'])) {
                $model->pageInfo = [];
                $n               = 0;
                foreach ($map['PageInfo'] as $item) {
                    $model->pageInfo[$n++] = null !== $item ? pageInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
