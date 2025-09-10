<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetEntityStoreDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetEntityStoreDataResponseBody\responseStatus\statusItem;

class responseStatus extends Model
{
    /**
     * @var string
     */
    public $executionStates;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $retryPolicy;

    /**
     * @var statusItem[]
     */
    public $statusItem;
    protected $_name = [
        'executionStates' => 'executionStates',
        'level' => 'level',
        'result' => 'result',
        'retryPolicy' => 'retryPolicy',
        'statusItem' => 'statusItem',
    ];

    public function validate()
    {
        if (\is_array($this->statusItem)) {
            Model::validateArray($this->statusItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->executionStates) {
            $res['executionStates'] = $this->executionStates;
        }

        if (null !== $this->level) {
            $res['level'] = $this->level;
        }

        if (null !== $this->result) {
            $res['result'] = $this->result;
        }

        if (null !== $this->retryPolicy) {
            $res['retryPolicy'] = $this->retryPolicy;
        }

        if (null !== $this->statusItem) {
            if (\is_array($this->statusItem)) {
                $res['statusItem'] = [];
                $n1 = 0;
                foreach ($this->statusItem as $item1) {
                    $res['statusItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['executionStates'])) {
            $model->executionStates = $map['executionStates'];
        }

        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        if (isset($map['retryPolicy'])) {
            $model->retryPolicy = $map['retryPolicy'];
        }

        if (isset($map['statusItem'])) {
            if (!empty($map['statusItem'])) {
                $model->statusItem = [];
                $n1 = 0;
                foreach ($map['statusItem'] as $item1) {
                    $model->statusItem[$n1] = statusItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
