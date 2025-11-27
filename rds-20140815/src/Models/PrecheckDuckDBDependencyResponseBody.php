<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\PrecheckDuckDBDependencyResponseBody\failedCheckItems;

class PrecheckDuckDBDependencyResponseBody extends Model
{
    /**
     * @var failedCheckItems[]
     */
    public $failedCheckItems;

    /**
     * @var bool
     */
    public $result;
    protected $_name = [
        'failedCheckItems' => 'FailedCheckItems',
        'result' => 'Result',
    ];

    public function validate()
    {
        if (\is_array($this->failedCheckItems)) {
            Model::validateArray($this->failedCheckItems);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedCheckItems) {
            if (\is_array($this->failedCheckItems)) {
                $res['FailedCheckItems'] = [];
                $n1 = 0;
                foreach ($this->failedCheckItems as $item1) {
                    $res['FailedCheckItems'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->result) {
            $res['Result'] = $this->result;
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
        if (isset($map['FailedCheckItems'])) {
            if (!empty($map['FailedCheckItems'])) {
                $model->failedCheckItems = [];
                $n1 = 0;
                foreach ($map['FailedCheckItems'] as $item1) {
                    $model->failedCheckItems[$n1] = failedCheckItems::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
