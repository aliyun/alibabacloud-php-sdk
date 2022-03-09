<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardPlanResponseBody\datas;

use AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimStandardPlanResponseBody\datas\config\mapInfo;
use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @description 标注信息id
     *
     * @var int
     */
    public $id;

    /**
     * @description 图层归类信息
     *
     * @var mapInfo[]
     */
    public $mapInfo;
    protected $_name = [
        'id'      => 'Id',
        'mapInfo' => 'MapInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->mapInfo) {
            $res['MapInfo'] = [];
            if (null !== $this->mapInfo && \is_array($this->mapInfo)) {
                $n = 0;
                foreach ($this->mapInfo as $item) {
                    $res['MapInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MapInfo'])) {
            if (!empty($map['MapInfo'])) {
                $model->mapInfo = [];
                $n              = 0;
                foreach ($map['MapInfo'] as $item) {
                    $model->mapInfo[$n++] = null !== $item ? mapInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
