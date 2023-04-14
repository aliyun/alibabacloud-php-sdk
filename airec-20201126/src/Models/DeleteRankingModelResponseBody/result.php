<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\DeleteRankingModelResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example xxx
     *
     * @var mixed[]
     */
    public $meta;

    /**
     * @example 123
     *
     * @var string
     */
    public $rankingModelId;
    protected $_name = [
        'meta'           => 'meta',
        'rankingModelId' => 'rankingModelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->meta) {
            $res['meta'] = $this->meta;
        }
        if (null !== $this->rankingModelId) {
            $res['rankingModelId'] = $this->rankingModelId;
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
        if (isset($map['meta'])) {
            $model->meta = $map['meta'];
        }
        if (isset($map['rankingModelId'])) {
            $model->rankingModelId = $map['rankingModelId'];
        }

        return $model;
    }
}
