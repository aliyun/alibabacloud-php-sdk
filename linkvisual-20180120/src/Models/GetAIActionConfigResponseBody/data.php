<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetAIActionConfigResponseBody;

use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetAIActionConfigResponseBody\data\inParamList;
use AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetAIActionConfigResponseBody\data\outParamList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $algoAction;

    /**
     * @var string
     */
    public $des;

    /**
     * @var bool
     */
    public $needDevice;

    /**
     * @var string
     */
    public $sync;

    /**
     * @var string
     */
    public $algoConfigItems;

    /**
     * @var inParamList[]
     */
    public $inParamList;

    /**
     * @var outParamList[]
     */
    public $outParamList;
    protected $_name = [
        'algoAction'      => 'AlgoAction',
        'des'             => 'Des',
        'needDevice'      => 'NeedDevice',
        'sync'            => 'Sync',
        'algoConfigItems' => 'AlgoConfigItems',
        'inParamList'     => 'InParamList',
        'outParamList'    => 'OutParamList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algoAction) {
            $res['AlgoAction'] = $this->algoAction;
        }
        if (null !== $this->des) {
            $res['Des'] = $this->des;
        }
        if (null !== $this->needDevice) {
            $res['NeedDevice'] = $this->needDevice;
        }
        if (null !== $this->sync) {
            $res['Sync'] = $this->sync;
        }
        if (null !== $this->algoConfigItems) {
            $res['AlgoConfigItems'] = $this->algoConfigItems;
        }
        if (null !== $this->inParamList) {
            $res['InParamList'] = [];
            if (null !== $this->inParamList && \is_array($this->inParamList)) {
                $n = 0;
                foreach ($this->inParamList as $item) {
                    $res['InParamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->outParamList) {
            $res['OutParamList'] = [];
            if (null !== $this->outParamList && \is_array($this->outParamList)) {
                $n = 0;
                foreach ($this->outParamList as $item) {
                    $res['OutParamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgoAction'])) {
            $model->algoAction = $map['AlgoAction'];
        }
        if (isset($map['Des'])) {
            $model->des = $map['Des'];
        }
        if (isset($map['NeedDevice'])) {
            $model->needDevice = $map['NeedDevice'];
        }
        if (isset($map['Sync'])) {
            $model->sync = $map['Sync'];
        }
        if (isset($map['AlgoConfigItems'])) {
            $model->algoConfigItems = $map['AlgoConfigItems'];
        }
        if (isset($map['InParamList'])) {
            if (!empty($map['InParamList'])) {
                $model->inParamList = [];
                $n                  = 0;
                foreach ($map['InParamList'] as $item) {
                    $model->inParamList[$n++] = null !== $item ? inParamList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OutParamList'])) {
            if (!empty($map['OutParamList'])) {
                $model->outParamList = [];
                $n                   = 0;
                foreach ($map['OutParamList'] as $item) {
                    $model->outParamList[$n++] = null !== $item ? outParamList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
