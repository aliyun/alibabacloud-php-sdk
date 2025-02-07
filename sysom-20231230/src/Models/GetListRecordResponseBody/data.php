<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetListRecordResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $analysisId;
    /**
     * @var string
     */
    public $analysisTime;
    /**
     * @var string
     */
    public $arguments;
    /**
     * @var string
     */
    public $failedLog;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'analysisId'   => 'analysisId',
        'analysisTime' => 'analysisTime',
        'arguments'    => 'arguments',
        'failedLog'    => 'failedLog',
        'status'       => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisId) {
            $res['analysisId'] = $this->analysisId;
        }

        if (null !== $this->analysisTime) {
            $res['analysisTime'] = $this->analysisTime;
        }

        if (null !== $this->arguments) {
            $res['arguments'] = $this->arguments;
        }

        if (null !== $this->failedLog) {
            $res['failedLog'] = $this->failedLog;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['analysisId'])) {
            $model->analysisId = $map['analysisId'];
        }

        if (isset($map['analysisTime'])) {
            $model->analysisTime = $map['analysisTime'];
        }

        if (isset($map['arguments'])) {
            $model->arguments = $map['arguments'];
        }

        if (isset($map['failedLog'])) {
            $model->failedLog = $map['failedLog'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
