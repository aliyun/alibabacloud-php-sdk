<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models\BatchRecallPushResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180208\Models\BatchRecallPushResponseBody\module\recallResults;

class module extends Model
{
    /**
     * @var recallResults[]
     */
    public $recallResults;
    protected $_name = [
        'recallResults' => 'RecallResults',
    ];

    public function validate()
    {
        if (\is_array($this->recallResults)) {
            Model::validateArray($this->recallResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recallResults) {
            if (\is_array($this->recallResults)) {
                $res['RecallResults'] = [];
                $n1 = 0;
                foreach ($this->recallResults as $item1) {
                    $res['RecallResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RecallResults'])) {
            if (!empty($map['RecallResults'])) {
                $model->recallResults = [];
                $n1 = 0;
                foreach ($map['RecallResults'] as $item1) {
                    $model->recallResults[$n1] = recallResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
