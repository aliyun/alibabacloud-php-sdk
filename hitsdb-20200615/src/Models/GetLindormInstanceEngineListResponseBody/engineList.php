<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceEngineListResponseBody;

use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormInstanceEngineListResponseBody\engineList\netInfoList;
use AlibabaCloud\Tea\Model;

class engineList extends Model
{
    /**
     * @var string
     */
    public $engineType;

    /**
     * @var netInfoList[]
     */
    public $netInfoList;
    protected $_name = [
        'engineType'  => 'EngineType',
        'netInfoList' => 'NetInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }
        if (null !== $this->netInfoList) {
            $res['NetInfoList'] = [];
            if (null !== $this->netInfoList && \is_array($this->netInfoList)) {
                $n = 0;
                foreach ($this->netInfoList as $item) {
                    $res['NetInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return engineList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }
        if (isset($map['NetInfoList'])) {
            if (!empty($map['NetInfoList'])) {
                $model->netInfoList = [];
                $n                  = 0;
                foreach ($map['NetInfoList'] as $item) {
                    $model->netInfoList[$n++] = null !== $item ? netInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
