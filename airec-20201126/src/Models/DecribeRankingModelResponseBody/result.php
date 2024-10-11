<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\DecribeRankingModelResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The time when the ranking model was created.
     *
     * @example 2018-12-07T02:24:26.000Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the ranking model was last modified.
     *
     * @example 2020-04-27T06:38:28.000Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The metadata.
     *
     * @var mixed[]
     */
    public $meta;

    /**
     * @description The ID of the ranking model.
     *
     * @example ranktest
     *
     * @var string
     */
    public $rankingModelId;
    protected $_name = [
        'gmtCreate'      => 'gmtCreate',
        'gmtModified'    => 'gmtModified',
        'meta'           => 'meta',
        'rankingModelId' => 'rankingModelId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
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
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['meta'])) {
            $model->meta = $map['meta'];
        }
        if (isset($map['rankingModelId'])) {
            $model->rankingModelId = $map['rankingModelId'];
        }

        return $model;
    }
}
