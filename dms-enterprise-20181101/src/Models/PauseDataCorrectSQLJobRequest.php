<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class PauseDataCorrectSQLJobRequest extends Model
{
    /**
     * @var int
     */
    public $jobId;

    /**
     * @var int
     */
    public $orderId;

    /**
     * @var int
     */
    public $tid;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'jobId'   => 'JobId',
        'orderId' => 'OrderId',
        'tid'     => 'Tid',
        'type'    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PauseDataCorrectSQLJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
