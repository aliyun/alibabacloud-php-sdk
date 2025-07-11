<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models\ListJobExecutorsResponseBody;

use AlibabaCloud\Tea\Model;

class executorStatus extends Model
{
    /**
     * @var int
     */
    public $deleted;

    /**
     * @var int
     */
    public $exception;

    /**
     * @var int
     */
    public $failed;

    /**
     * @var int
     */
    public $initing;

    /**
     * @var int
     */
    public $pending;

    /**
     * @var int
     */
    public $running;

    /**
     * @var int
     */
    public $succeeded;
    protected $_name = [
        'deleted' => 'Deleted',
        'exception' => 'Exception',
        'failed' => 'Failed',
        'initing' => 'Initing',
        'pending' => 'Pending',
        'running' => 'Running',
        'succeeded' => 'Succeeded',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }
        if (null !== $this->exception) {
            $res['Exception'] = $this->exception;
        }
        if (null !== $this->failed) {
            $res['Failed'] = $this->failed;
        }
        if (null !== $this->initing) {
            $res['Initing'] = $this->initing;
        }
        if (null !== $this->pending) {
            $res['Pending'] = $this->pending;
        }
        if (null !== $this->running) {
            $res['Running'] = $this->running;
        }
        if (null !== $this->succeeded) {
            $res['Succeeded'] = $this->succeeded;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return executorStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }
        if (isset($map['Exception'])) {
            $model->exception = $map['Exception'];
        }
        if (isset($map['Failed'])) {
            $model->failed = $map['Failed'];
        }
        if (isset($map['Initing'])) {
            $model->initing = $map['Initing'];
        }
        if (isset($map['Pending'])) {
            $model->pending = $map['Pending'];
        }
        if (isset($map['Running'])) {
            $model->running = $map['Running'];
        }
        if (isset($map['Succeeded'])) {
            $model->succeeded = $map['Succeeded'];
        }

        return $model;
    }
}
