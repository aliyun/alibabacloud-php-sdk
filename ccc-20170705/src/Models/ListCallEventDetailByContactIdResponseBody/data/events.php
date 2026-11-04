<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListCallEventDetailByContactIdResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20170705\Models\ListCallEventDetailByContactIdResponseBody\data\events\callEventDetail;

class events extends Model
{
    /**
     * @var callEventDetail[]
     */
    public $callEventDetail;
    protected $_name = [
        'callEventDetail' => 'CallEventDetail',
    ];

    public function validate()
    {
        if (\is_array($this->callEventDetail)) {
            Model::validateArray($this->callEventDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callEventDetail) {
            if (\is_array($this->callEventDetail)) {
                $res['CallEventDetail'] = [];
                $n1 = 0;
                foreach ($this->callEventDetail as $item1) {
                    $res['CallEventDetail'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CallEventDetail'])) {
            if (!empty($map['CallEventDetail'])) {
                $model->callEventDetail = [];
                $n1 = 0;
                foreach ($map['CallEventDetail'] as $item1) {
                    $model->callEventDetail[$n1] = callEventDetail::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
