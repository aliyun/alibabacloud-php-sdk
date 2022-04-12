<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiskReplicaPairProgressResponseBody extends Model
{
    /**
     * @description 同步进度
     *
     * @var int
     */
    public $progress;

    /**
     * @description 最近一次恢复点的时间戳。有条件返回，复制对start后，才会返回该字段。
     *
     * @var int
     */
    public $recoverPoint;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'progress'     => 'Progress',
        'recoverPoint' => 'RecoverPoint',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->recoverPoint) {
            $res['RecoverPoint'] = $this->recoverPoint;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiskReplicaPairProgressResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RecoverPoint'])) {
            $model->recoverPoint = $map['RecoverPoint'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
