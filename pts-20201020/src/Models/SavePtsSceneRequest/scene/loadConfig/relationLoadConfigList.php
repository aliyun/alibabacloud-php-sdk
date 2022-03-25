<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest\scene\loadConfig;

use AlibabaCloud\Tea\Model;

class relationLoadConfigList extends Model
{
    /**
     * @description concurrencyBegin
     *
     * @var int
     */
    public $concurrencyBegin;

    /**
     * @description 最大并发
     *
     * @var int
     */
    public $concurrencyLimit;

    /**
     * @description 链路id
     *
     * @var string
     */
    public $relationId;
    protected $_name = [
        'concurrencyBegin' => 'ConcurrencyBegin',
        'concurrencyLimit' => 'ConcurrencyLimit',
        'relationId'       => 'RelationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->concurrencyBegin) {
            $res['ConcurrencyBegin'] = $this->concurrencyBegin;
        }
        if (null !== $this->concurrencyLimit) {
            $res['ConcurrencyLimit'] = $this->concurrencyLimit;
        }
        if (null !== $this->relationId) {
            $res['RelationId'] = $this->relationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relationLoadConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConcurrencyBegin'])) {
            $model->concurrencyBegin = $map['ConcurrencyBegin'];
        }
        if (isset($map['ConcurrencyLimit'])) {
            $model->concurrencyLimit = $map['ConcurrencyLimit'];
        }
        if (isset($map['RelationId'])) {
            $model->relationId = $map['RelationId'];
        }

        return $model;
    }
}
