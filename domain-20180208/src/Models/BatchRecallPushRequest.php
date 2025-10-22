<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Dara\Model;

class BatchRecallPushRequest extends Model
{
    /**
     * @var string[]
     */
    public $outBizIds;
    protected $_name = [
        'outBizIds' => 'OutBizIds',
    ];

    public function validate()
    {
        if (\is_array($this->outBizIds)) {
            Model::validateArray($this->outBizIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outBizIds) {
            if (\is_array($this->outBizIds)) {
                $res['OutBizIds'] = [];
                $n1 = 0;
                foreach ($this->outBizIds as $item1) {
                    $res['OutBizIds'][$n1] = $item1;
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
        if (isset($map['OutBizIds'])) {
            if (!empty($map['OutBizIds'])) {
                $model->outBizIds = [];
                $n1 = 0;
                foreach ($map['OutBizIds'] as $item1) {
                    $model->outBizIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
