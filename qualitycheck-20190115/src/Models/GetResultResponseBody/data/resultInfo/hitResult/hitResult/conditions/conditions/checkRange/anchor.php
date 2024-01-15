<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult\conditions\conditions\checkRange;

use AlibabaCloud\Tea\Model;

class anchor extends Model
{
    /**
     * @description 条件ID
     *
     * @var string
     */
    public $cid;

    /**
     * @description 命中次数
     *
     * @var int
     */
    public $hitTime;

    /**
     * @description 位置
     *
     * @var string
     */
    public $location;
    protected $_name = [
        'cid'      => 'Cid',
        'hitTime'  => 'Hit_time',
        'location' => 'Location',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cid) {
            $res['Cid'] = $this->cid;
        }
        if (null !== $this->hitTime) {
            $res['Hit_time'] = $this->hitTime;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return anchor
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cid'])) {
            $model->cid = $map['Cid'];
        }
        if (isset($map['Hit_time'])) {
            $model->hitTime = $map['Hit_time'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        return $model;
    }
}
