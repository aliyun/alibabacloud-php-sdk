<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class DebugDialogueResponseBody extends Model
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
     * @example d74d6290-7cbe-4436-b5d7-014ebb0f4060
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 80d11be3-faad-4101-b4b0-59dbea28aaf0
     *
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
     * @return DebugDialogueResponseBody
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
