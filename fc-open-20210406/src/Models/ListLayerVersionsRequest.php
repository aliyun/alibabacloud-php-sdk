<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class ListLayerVersionsRequest extends Model
{
    /**
     * @description 本次读取的最大数据记录数量
     *
     * @var int
     */
    public $limit;

    /**
     * @description 起始版本
     *
     * @var int
     */
    public $startVersion;
    protected $_name = [
        'limit'        => 'limit',
        'startVersion' => 'startVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->startVersion) {
            $res['startVersion'] = $this->startVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLayerVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['startVersion'])) {
            $model->startVersion = $map['startVersion'];
        }

        return $model;
    }
}
