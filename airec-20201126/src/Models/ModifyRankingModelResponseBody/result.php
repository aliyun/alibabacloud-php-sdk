<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ModifyRankingModelResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description The error message.
     *
     * @example 2020-11-11T09:47:43.000Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The ID of the request.
     *
     * @example 2020-11-11T09:47:43.000Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description __null__
     *
     * @example {}
     *
     * @var mixed[]
     */
    public $meta;

    /**
     * @description The error code.
     *
     * @example test1234
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
