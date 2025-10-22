<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models\BatchQueryPushStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180208\Models\BatchQueryPushStatusResponseBody\module\pushResults;

class module extends Model
{
    /**
     * @var pushResults[]
     */
    public $pushResults;
    protected $_name = [
        'pushResults' => 'PushResults',
    ];

    public function validate()
    {
        if (\is_array($this->pushResults)) {
            Model::validateArray($this->pushResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pushResults) {
            if (\is_array($this->pushResults)) {
                $res['PushResults'] = [];
                $n1 = 0;
                foreach ($this->pushResults as $item1) {
                    $res['PushResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PushResults'])) {
            if (!empty($map['PushResults'])) {
                $model->pushResults = [];
                $n1 = 0;
                foreach ($map['PushResults'] as $item1) {
                    $model->pushResults[$n1] = pushResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
