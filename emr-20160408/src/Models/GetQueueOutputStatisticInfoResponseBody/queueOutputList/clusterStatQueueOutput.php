<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\GetQueueOutputStatisticInfoResponseBody\queueOutputList;

use AlibabaCloud\Tea\Model;

class clusterStatQueueOutput extends Model
{
    /**
     * @var string
     */
    public $queue;

    /**
     * @var int
     */
    public $bytesOutput;
    protected $_name = [
        'queue'       => 'Queue',
        'bytesOutput' => 'BytesOutput',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
        }
        if (null !== $this->bytesOutput) {
            $res['BytesOutput'] = $this->bytesOutput;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterStatQueueOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }
        if (isset($map['BytesOutput'])) {
            $model->bytesOutput = $map['BytesOutput'];
        }

        return $model;
    }
}
