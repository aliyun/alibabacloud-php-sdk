<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class DebugCollectedNumberResponseBody extends Model
{
    /**
     * @example Broadcast
     *
     * @var string
     */
    public $action;

    /**
     * @example {}
     *
     * @var string
     */
    public $actionParams;

    /**
     * @example true
     *
     * @var bool
     */
    public $interruptible;

    /**
     * @example abb4aa26-3a8e-43dd-82f8-0c3898c9c67f
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $textResponse;
    protected $_name = [
        'action'        => 'Action',
        'actionParams'  => 'ActionParams',
        'interruptible' => 'Interruptible',
        'requestId'     => 'RequestId',
        'textResponse'  => 'TextResponse',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->actionParams) {
            $res['ActionParams'] = $this->actionParams;
        }
        if (null !== $this->interruptible) {
            $res['Interruptible'] = $this->interruptible;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->textResponse) {
            $res['TextResponse'] = $this->textResponse;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DebugCollectedNumberResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['ActionParams'])) {
            $model->actionParams = $map['ActionParams'];
        }
        if (isset($map['Interruptible'])) {
            $model->interruptible = $map['Interruptible'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TextResponse'])) {
            $model->textResponse = $map['TextResponse'];
        }

        return $model;
    }
}
