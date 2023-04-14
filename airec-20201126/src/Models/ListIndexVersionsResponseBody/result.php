<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListIndexVersionsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 2020-11-08T02:00:00Z
     *
     * @var string
     */
    public $builtTime;

    /**
     * @example abc
     *
     * @var string
     */
    public $code;

    /**
     * @example 600
     *
     * @var int
     */
    public $costSeconds;

    /**
     * @example Auto
     *
     * @var string
     */
    public $flowType;

    /**
     * @example xxx
     *
     * @var string
     */
    public $message;

    /**
     * @example 80
     *
     * @var int
     */
    public $progress;

    /**
     * @example true
     *
     * @var bool
     */
    public $rollbackEnabled;

    /**
     * @example 300922211
     *
     * @var int
     */
    public $size;

    /**
     * @example abc
     *
     * @var string
     */
    public $status;

    /**
     * @example 2020-11-08T02:00:00Z
     *
     * @var string
     */
    public $switchedTime;

    /**
     * @example 2020112301
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'builtTime'       => 'builtTime',
        'code'            => 'code',
        'costSeconds'     => 'costSeconds',
        'flowType'        => 'flowType',
        'message'         => 'message',
        'progress'        => 'progress',
        'rollbackEnabled' => 'rollbackEnabled',
        'size'            => 'size',
        'status'          => 'status',
        'switchedTime'    => 'switchedTime',
        'versionId'       => 'versionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->builtTime) {
            $res['builtTime'] = $this->builtTime;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->costSeconds) {
            $res['costSeconds'] = $this->costSeconds;
        }
        if (null !== $this->flowType) {
            $res['flowType'] = $this->flowType;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->progress) {
            $res['progress'] = $this->progress;
        }
        if (null !== $this->rollbackEnabled) {
            $res['rollbackEnabled'] = $this->rollbackEnabled;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->switchedTime) {
            $res['switchedTime'] = $this->switchedTime;
        }
        if (null !== $this->versionId) {
            $res['versionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['builtTime'])) {
            $model->builtTime = $map['builtTime'];
        }
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['costSeconds'])) {
            $model->costSeconds = $map['costSeconds'];
        }
        if (isset($map['flowType'])) {
            $model->flowType = $map['flowType'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['progress'])) {
            $model->progress = $map['progress'];
        }
        if (isset($map['rollbackEnabled'])) {
            $model->rollbackEnabled = $map['rollbackEnabled'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['switchedTime'])) {
            $model->switchedTime = $map['switchedTime'];
        }
        if (isset($map['versionId'])) {
            $model->versionId = $map['versionId'];
        }

        return $model;
    }
}
