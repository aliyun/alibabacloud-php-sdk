<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\ListContainerStatusRequest\gameSessionIdList;
use AlibabaCloud\Tea\Model;

class ListContainerStatusRequest extends Model
{
    /**
     * @var gameSessionIdList[]
     */
    public $gameSessionIdList;
    protected $_name = [
        'gameSessionIdList' => 'GameSessionIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gameSessionIdList) {
            $res['GameSessionIdList'] = [];
            if (null !== $this->gameSessionIdList && \is_array($this->gameSessionIdList)) {
                $n = 0;
                foreach ($this->gameSessionIdList as $item) {
                    $res['GameSessionIdList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListContainerStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GameSessionIdList'])) {
            if (!empty($map['GameSessionIdList'])) {
                $model->gameSessionIdList = [];
                $n                        = 0;
                foreach ($map['GameSessionIdList'] as $item) {
                    $model->gameSessionIdList[$n++] = null !== $item ? gameSessionIdList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
