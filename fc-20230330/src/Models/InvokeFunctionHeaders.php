<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class InvokeFunctionHeaders extends Model
{
    /**
     * @var string[]
     */
    public $commonHeaders;
    /**
     * @var string
     */
    public $xFcAsyncTaskId;
    /**
     * @var string
     */
    public $xFcInvocationType;
    /**
     * @var string
     */
    public $xFcLogType;
    protected $_name = [
        'commonHeaders'     => 'commonHeaders',
        'xFcAsyncTaskId'    => 'x-fc-async-task-id',
        'xFcInvocationType' => 'x-fc-invocation-type',
        'xFcLogType'        => 'x-fc-log-type',
    ];

    public function validate()
    {
        if (\is_array($this->commonHeaders)) {
            Model::validateArray($this->commonHeaders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            if (\is_array($this->commonHeaders)) {
                $res['commonHeaders'] = [];
                foreach ($this->commonHeaders as $key1 => $value1) {
                    $res['commonHeaders'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->xFcAsyncTaskId) {
            $res['x-fc-async-task-id'] = $this->xFcAsyncTaskId;
        }

        if (null !== $this->xFcInvocationType) {
            $res['x-fc-invocation-type'] = $this->xFcInvocationType;
        }

        if (null !== $this->xFcLogType) {
            $res['x-fc-log-type'] = $this->xFcLogType;
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
        if (isset($map['commonHeaders'])) {
            if (!empty($map['commonHeaders'])) {
                $model->commonHeaders = [];
                foreach ($map['commonHeaders'] as $key1 => $value1) {
                    $model->commonHeaders[$key1] = $value1;
                }
            }
        }

        if (isset($map['x-fc-async-task-id'])) {
            $model->xFcAsyncTaskId = $map['x-fc-async-task-id'];
        }

        if (isset($map['x-fc-invocation-type'])) {
            $model->xFcInvocationType = $map['x-fc-invocation-type'];
        }

        if (isset($map['x-fc-log-type'])) {
            $model->xFcLogType = $map['x-fc-log-type'];
        }

        return $model;
    }
}
