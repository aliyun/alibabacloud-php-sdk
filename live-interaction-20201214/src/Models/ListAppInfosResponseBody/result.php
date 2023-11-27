<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListAppInfosResponseBody;

use AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListAppInfosResponseBody\result\appInfos;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var appInfos[]
     */
    public $appInfos;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'appInfos'   => 'AppInfos',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appInfos) {
            $res['AppInfos'] = [];
            if (null !== $this->appInfos && \is_array($this->appInfos)) {
                $n = 0;
                foreach ($this->appInfos as $item) {
                    $res['AppInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['AppInfos'])) {
            if (!empty($map['AppInfos'])) {
                $model->appInfos = [];
                $n               = 0;
                foreach ($map['AppInfos'] as $item) {
                    $model->appInfos[$n++] = null !== $item ? appInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
