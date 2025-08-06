<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListIntelligentStrategyResponseBody\intelligentStrategyList;

class ListIntelligentStrategyResponseBody extends Model
{
    /**
     * @var intelligentStrategyList[]
     */
    public $intelligentStrategyList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'intelligentStrategyList' => 'IntelligentStrategyList',
        'requestId' => 'RequestId',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->intelligentStrategyList)) {
            Model::validateArray($this->intelligentStrategyList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->intelligentStrategyList) {
            if (\is_array($this->intelligentStrategyList)) {
                $res['IntelligentStrategyList'] = [];
                $n1 = 0;
                foreach ($this->intelligentStrategyList as $item1) {
                    $res['IntelligentStrategyList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['IntelligentStrategyList'])) {
            if (!empty($map['IntelligentStrategyList'])) {
                $model->intelligentStrategyList = [];
                $n1 = 0;
                foreach ($map['IntelligentStrategyList'] as $item1) {
                    $model->intelligentStrategyList[$n1] = intelligentStrategyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
