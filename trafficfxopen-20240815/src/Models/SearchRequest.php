<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\TrafficFxOpen\V20240815\Models;

use AlibabaCloud\Tea\Model;

class SearchRequest extends Model
{
    /**
     * @var string
     */
    public $scene;

    /**
     * @description This parameter is required.
     *
     * @example {
     * }
     * @var string
     */
    public $searchParam;

    /**
     * @description This parameter is required.
     *
     * @example “1”
     *
     * @var string
     */
    public $source;

    /**
     * @description This parameter is required.
     *
     * @example “1”
     *
     * @var string
     */
    public $terminal;

    /**
     * @example “121343”
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'scene'       => 'scene',
        'searchParam' => 'searchParam',
        'source'      => 'source',
        'terminal'    => 'terminal',
        'userId'      => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }
        if (null !== $this->searchParam) {
            $res['searchParam'] = $this->searchParam;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->terminal) {
            $res['terminal'] = $this->terminal;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }
        if (isset($map['searchParam'])) {
            $model->searchParam = $map['searchParam'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['terminal'])) {
            $model->terminal = $map['terminal'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
