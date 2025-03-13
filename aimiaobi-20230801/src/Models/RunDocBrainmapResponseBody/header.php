<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocBrainmapResponseBody;

use AlibabaCloud\Tea\Model;

class header extends Model
{
    /**
     * @example success
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example success
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example task-failed
     *
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $eventInfo;

    /**
     * @example 07181f55-2311-48af-8048-132a77dee020
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example 161816
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 6427cdf4-2ffe-4d05-b0ef-c4adceea90f4
     *
     * @var string
     */
    public $traceId;
    protected $_name = [
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'event' => 'Event',
        'eventInfo' => 'EventInfo',
        'sessionId' => 'SessionId',
        'taskId' => 'TaskId',
        'traceId' => 'TraceId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->event) {
            $res['Event'] = $this->event;
        }
        if (null !== $this->eventInfo) {
            $res['EventInfo'] = $this->eventInfo;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return header
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['Event'])) {
            $model->event = $map['Event'];
        }
        if (isset($map['EventInfo'])) {
            $model->eventInfo = $map['EventInfo'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        return $model;
    }
}
