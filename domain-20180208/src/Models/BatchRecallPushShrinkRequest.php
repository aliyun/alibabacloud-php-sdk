<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Dara\Model;

class BatchRecallPushShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $outBizIdsShrink;
    protected $_name = [
        'outBizIdsShrink' => 'OutBizIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outBizIdsShrink) {
            $res['OutBizIds'] = $this->outBizIdsShrink;
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
            $model->outBizIdsShrink = $map['OutBizIds'];
        }

        return $model;
    }
}
