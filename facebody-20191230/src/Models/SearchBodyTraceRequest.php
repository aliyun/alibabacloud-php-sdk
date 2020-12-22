<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\SDK\Facebody\V20191230\Models\SearchBodyTraceRequest\images;
use AlibabaCloud\Tea\Model;

class SearchBodyTraceRequest extends Model
{
    /**
     * @description 数据库ID
     *
     * @var int
     */
    public $dbId;

    /**
     * @description Trace图片信息列表
     *
     * @var images[]
     */
    public $images;

    /**
     * @description 结果Trace数量上限，默认10，取值范围[1, 100]
     *
     * @var int
     */
    public $limit;

    /**
     * @description score阈值，只返回大于等于该score的数据，取值范围[-1.0, 1.0]，默认为空
     *
     * @var float
     */
    public $minScore;
    protected $_name = [
        'dbId'     => 'DbId',
        'images'   => 'Images',
        'limit'    => 'Limit',
        'minScore' => 'MinScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->images) {
            $res['Images'] = [];
            if (null !== $this->images && \is_array($this->images)) {
                $n = 0;
                foreach ($this->images as $item) {
                    $res['Images'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->minScore) {
            $res['MinScore'] = $this->minScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchBodyTraceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = [];
                $n             = 0;
                foreach ($map['Images'] as $item) {
                    $model->images[$n++] = null !== $item ? images::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['MinScore'])) {
            $model->minScore = $map['MinScore'];
        }

        return $model;
    }
}
