<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryStudioProjectListResponseBody\data;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryStudioProjectListResponseBody\data\list_\projectInfo;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var projectInfo[]
     */
    public $projectInfo;
    protected $_name = [
        'projectInfo' => 'ProjectInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectInfo) {
            $res['ProjectInfo'] = [];
            if (null !== $this->projectInfo && \is_array($this->projectInfo)) {
                $n = 0;
                foreach ($this->projectInfo as $item) {
                    $res['ProjectInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['ProjectInfo'])) {
            if (!empty($map['ProjectInfo'])) {
                $model->projectInfo = [];
                $n                  = 0;
                foreach ($map['ProjectInfo'] as $item) {
                    $model->projectInfo[$n++] = null !== $item ? projectInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
