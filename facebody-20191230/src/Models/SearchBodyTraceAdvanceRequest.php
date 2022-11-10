<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\SDK\Facebody\V20191230\Models\SearchBodyTraceAdvanceRequest\images;
use AlibabaCloud\Tea\Model;

class SearchBodyTraceAdvanceRequest extends Model
{
    /**
     * @var int
     */
    public $dbId;

    /**
     * @var images[]
     */
    public $images;

    /**
     * @var int
     */
    public $limit;

    /**
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
     * @return SearchBodyTraceAdvanceRequest
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
