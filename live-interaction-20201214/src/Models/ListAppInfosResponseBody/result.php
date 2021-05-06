<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListAppInfosResponseBody;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListAppInfosResponseBody\result\appInfos;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 总数，用于分页
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description 应用信息列表
     *
     * @var appInfos[]
     */
    public $appInfos;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'appInfos'   => 'AppInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->appInfos) {
            $res['AppInfos'] = [];
            if (null !== $this->appInfos && \is_array($this->appInfos)) {
                $n = 0;
                foreach ($this->appInfos as $item) {
                    $res['AppInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['AppInfos'])) {
            if (!empty($map['AppInfos'])) {
                $model->appInfos = [];
                $n               = 0;
                foreach ($map['AppInfos'] as $item) {
                    $model->appInfos[$n++] = null !== $item ? appInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
