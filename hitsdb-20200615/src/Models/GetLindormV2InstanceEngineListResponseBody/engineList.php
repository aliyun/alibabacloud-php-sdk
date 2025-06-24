<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2InstanceEngineListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hitsdb\V20200615\Models\GetLindormV2InstanceEngineListResponseBody\engineList\netInfoList;

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
        'engineType' => 'EngineType',
        'netInfoList' => 'NetInfoList',
    ];

    public function validate()
    {
        if (\is_array($this->netInfoList)) {
            Model::validateArray($this->netInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->engineType) {
            $res['EngineType'] = $this->engineType;
        }

        if (null !== $this->netInfoList) {
            if (\is_array($this->netInfoList)) {
                $res['NetInfoList'] = [];
                $n1 = 0;
                foreach ($this->netInfoList as $item1) {
                    $res['NetInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['EngineType'])) {
            $model->engineType = $map['EngineType'];
        }

        if (isset($map['NetInfoList'])) {
            if (!empty($map['NetInfoList'])) {
                $model->netInfoList = [];
                $n1 = 0;
                foreach ($map['NetInfoList'] as $item1) {
                    $model->netInfoList[$n1] = netInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
