<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\AddGatewayQuotaRuleResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\AddGatewayQuotaRuleResponseBody\data\conflictPreview\items;

class conflictPreview extends Model
{
    /**
     * @var string
     */
    public $conflictHash;

    /**
     * @var items[]
     */
    public $items;

    /**
     * @var int
     */
    public $totalConflictCount;
    protected $_name = [
        'conflictHash' => 'conflictHash',
        'items' => 'items',
        'totalConflictCount' => 'totalConflictCount',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conflictHash) {
            $res['conflictHash'] = $this->conflictHash;
        }

        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalConflictCount) {
            $res['totalConflictCount'] = $this->totalConflictCount;
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
        if (isset($map['conflictHash'])) {
            $model->conflictHash = $map['conflictHash'];
        }

        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['items'] as $item1) {
                    $model->items[$n1] = items::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['totalConflictCount'])) {
            $model->totalConflictCount = $map['totalConflictCount'];
        }

        return $model;
    }
}
