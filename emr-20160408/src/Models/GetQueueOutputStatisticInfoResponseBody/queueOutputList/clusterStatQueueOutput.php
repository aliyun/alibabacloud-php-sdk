<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\GetQueueOutputStatisticInfoResponseBody\queueOutputList;

use AlibabaCloud\Tea\Model;

class clusterStatQueueOutput extends Model
{
    /**
     * @var int
     */
    public $bytesOutput;

    /**
     * @var string
     */
    public $queue;
    protected $_name = [
        'bytesOutput' => 'BytesOutput',
        'queue'       => 'Queue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bytesOutput) {
            $res['BytesOutput'] = $this->bytesOutput;
        }
        if (null !== $this->queue) {
            $res['Queue'] = $this->queue;
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
        if (isset($map['BytesOutput'])) {
            $model->bytesOutput = $map['BytesOutput'];
        }
        if (isset($map['Queue'])) {
            $model->queue = $map['Queue'];
        }

        return $model;
    }
}
