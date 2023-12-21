<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListScenesResponseBody\scenes;
use AlibabaCloud\Tea\Model;

class ListScenesResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example B8987BF7-6028-5B17-80E0-251B7BD67BBA
     *
     * @var string
     */
    public $requestId;

    /**
     * @var scenes[]
     */
    public $scenes;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'  => 'RequestId',
        'scenes'     => 'Scenes',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scenes) {
            $res['Scenes'] = [];
            if (null !== $this->scenes && \is_array($this->scenes)) {
                $n = 0;
                foreach ($this->scenes as $item) {
                    $res['Scenes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListScenesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Scenes'])) {
            if (!empty($map['Scenes'])) {
                $model->scenes = [];
                $n             = 0;
                foreach ($map['Scenes'] as $item) {
                    $model->scenes[$n++] = null !== $item ? scenes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
