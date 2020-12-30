<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListCallEventDetailByContactIdResponseBody\data;

use AlibabaCloud\SDK\CCC\V20170705\Models\ListCallEventDetailByContactIdResponseBody\data\events\callEventDetail;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callEventDetail) {
            $res['CallEventDetail'] = [];
            if (null !== $this->callEventDetail && \is_array($this->callEventDetail)) {
                $n = 0;
                foreach ($this->callEventDetail as $item) {
                    $res['CallEventDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return events
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallEventDetail'])) {
            if (!empty($map['CallEventDetail'])) {
                $model->callEventDetail = [];
                $n                      = 0;
                foreach ($map['CallEventDetail'] as $item) {
                    $model->callEventDetail[$n++] = null !== $item ? callEventDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
