<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\SavePtsSceneRequest\scene\loadConfig;

use AlibabaCloud\Dara\Model;

class relationLoadConfigList extends Model
{
    /**
     * @var int
     */
    public $concurrencyBegin;

    /**
     * @var int
     */
    public $concurrencyLimit;

    /**
     * @var string
     */
    public $relationId;
    protected $_name = [
        'concurrencyBegin' => 'ConcurrencyBegin',
        'concurrencyLimit' => 'ConcurrencyLimit',
        'relationId' => 'RelationId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
