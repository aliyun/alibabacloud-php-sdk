<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListScenesResponseBody\scenes;

class ListScenesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var scenes[]
     */
    public $scenes;
    /**
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
        if (\is_array($this->scenes)) {
            Model::validateArray($this->scenes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scenes) {
            if (\is_array($this->scenes)) {
                $res['Scenes'] = [];
                $n1            = 0;
                foreach ($this->scenes as $item1) {
                    $res['Scenes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Scenes'])) {
            if (!empty($map['Scenes'])) {
                $model->scenes = [];
                $n1            = 0;
                foreach ($map['Scenes'] as $item1) {
                    $model->scenes[$n1++] = scenes::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
