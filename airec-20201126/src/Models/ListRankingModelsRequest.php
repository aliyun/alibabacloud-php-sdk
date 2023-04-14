<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class ListRankingModelsRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example xxx
     *
     * @var string
     */
    public $rankingModelId;

    /**
     * @example 1
     *
     * @var int
     */
    public $size;
    protected $_name = [
        'page'           => 'page',
        'rankingModelId' => 'rankingModelId',
        'size'           => 'size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->rankingModelId) {
            $res['rankingModelId'] = $this->rankingModelId;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRankingModelsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['rankingModelId'])) {
            $model->rankingModelId = $map['rankingModelId'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
