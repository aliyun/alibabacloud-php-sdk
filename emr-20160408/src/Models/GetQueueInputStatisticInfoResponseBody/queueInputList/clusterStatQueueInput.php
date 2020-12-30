<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\GetQueueInputStatisticInfoResponseBody\queueInputList;

use AlibabaCloud\Tea\Model;

class clusterStatQueueInput extends Model
{
    /**
     * @var int
     */
    public $bytesInput;

    /**
     * @var string
     */
    public $queue;
    protected $_name = [
        'bytesInput' => 'BytesInput',
        'queue'      => 'Queue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bytesInput) {
            $res['BytesInput'] = $this->bytesInput;
        }
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterStatQueueInput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BytesInput'])) {
            $model->bytesInput = $map['BytesInput'];
        }
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }

        return $model;
    }
}
