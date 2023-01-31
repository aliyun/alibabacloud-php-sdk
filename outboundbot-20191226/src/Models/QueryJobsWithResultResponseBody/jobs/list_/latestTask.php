<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsWithResultResponseBody\jobs\list_;

use AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsWithResultResponseBody\jobs\list_\latestTask\contact;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsWithResultResponseBody\jobs\list_\latestTask\dialExceptionCodes;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsWithResultResponseBody\jobs\list_\latestTask\extras;
use AlibabaCloud\SDK\OutboundBot\V20191226\Models\QueryJobsWithResultResponseBody\jobs\list_\latestTask\tagHits;
use AlibabaCloud\Tea\Model;

class latestTask extends Model
{
    /**
     * @var int
     */
    public $callDuration;

    /**
     * @var string
     */
    public $callDurationDisplay;

    /**
     * @var int
     */
    public $callTime;

    /**
     * @var contact
     */
    public $contact;

    /**
     * @var dialExceptionCodes[]
     */
    public $dialExceptionCodes;

    /**
     * @var extras[]
     */
    public $extras;

    /**
     * @var bool
     */
    public $hasAnswered;

    /**
     * @var bool
     */
    public $hasHangUpByRejection;

    /**
     * @var bool
     */
    public $hasLastPlaybackCompleted;

    /**
     * @var bool
     */
    public $hasReachedEndOfFlow;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusName;

    /**
     * @var tagHits[]
     */
    public $tagHits;

    /**
     * @var string
     */
    public $taskEndReason;
    protected $_name = [
        'callDuration'             => 'CallDuration',
        'callDurationDisplay'      => 'CallDurationDisplay',
        'callTime'                 => 'CallTime',
        'contact'                  => 'Contact',
        'dialExceptionCodes'       => 'DialExceptionCodes',
        'extras'                   => 'Extras',
        'hasAnswered'              => 'HasAnswered',
        'hasHangUpByRejection'     => 'HasHangUpByRejection',
        'hasLastPlaybackCompleted' => 'HasLastPlaybackCompleted',
        'hasReachedEndOfFlow'      => 'HasReachedEndOfFlow',
        'status'                   => 'Status',
        'statusName'               => 'StatusName',
        'tagHits'                  => 'TagHits',
        'taskEndReason'            => 'TaskEndReason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callDuration) {
            $res['CallDuration'] = $this->callDuration;
        }
        if (null !== $this->callDurationDisplay) {
            $res['CallDurationDisplay'] = $this->callDurationDisplay;
        }
        if (null !== $this->callTime) {
            $res['CallTime'] = $this->callTime;
        }
        if (null !== $this->contact) {
            $res['Contact'] = null !== $this->contact ? $this->contact->toMap() : null;
        }
        if (null !== $this->dialExceptionCodes) {
            $res['DialExceptionCodes'] = [];
            if (null !== $this->dialExceptionCodes && \is_array($this->dialExceptionCodes)) {
                $n = 0;
                foreach ($this->dialExceptionCodes as $item) {
                    $res['DialExceptionCodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->extras) {
            $res['Extras'] = [];
            if (null !== $this->extras && \is_array($this->extras)) {
                $n = 0;
                foreach ($this->extras as $item) {
                    $res['Extras'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hasAnswered) {
            $res['HasAnswered'] = $this->hasAnswered;
        }
        if (null !== $this->hasHangUpByRejection) {
            $res['HasHangUpByRejection'] = $this->hasHangUpByRejection;
        }
        if (null !== $this->hasLastPlaybackCompleted) {
            $res['HasLastPlaybackCompleted'] = $this->hasLastPlaybackCompleted;
        }
        if (null !== $this->hasReachedEndOfFlow) {
            $res['HasReachedEndOfFlow'] = $this->hasReachedEndOfFlow;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusName) {
            $res['StatusName'] = $this->statusName;
        }
        if (null !== $this->tagHits) {
            $res['TagHits'] = [];
            if (null !== $this->tagHits && \is_array($this->tagHits)) {
                $n = 0;
                foreach ($this->tagHits as $item) {
                    $res['TagHits'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskEndReason) {
            $res['TaskEndReason'] = $this->taskEndReason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return latestTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallDuration'])) {
            $model->callDuration = $map['CallDuration'];
        }
        if (isset($map['CallDurationDisplay'])) {
            $model->callDurationDisplay = $map['CallDurationDisplay'];
        }
        if (isset($map['CallTime'])) {
            $model->callTime = $map['CallTime'];
        }
        if (isset($map['Contact'])) {
            $model->contact = contact::fromMap($map['Contact']);
        }
        if (isset($map['DialExceptionCodes'])) {
            if (!empty($map['DialExceptionCodes'])) {
                $model->dialExceptionCodes = [];
                $n                         = 0;
                foreach ($map['DialExceptionCodes'] as $item) {
                    $model->dialExceptionCodes[$n++] = null !== $item ? dialExceptionCodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Extras'])) {
            if (!empty($map['Extras'])) {
                $model->extras = [];
                $n             = 0;
                foreach ($map['Extras'] as $item) {
                    $model->extras[$n++] = null !== $item ? extras::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HasAnswered'])) {
            $model->hasAnswered = $map['HasAnswered'];
        }
        if (isset($map['HasHangUpByRejection'])) {
            $model->hasHangUpByRejection = $map['HasHangUpByRejection'];
        }
        if (isset($map['HasLastPlaybackCompleted'])) {
            $model->hasLastPlaybackCompleted = $map['HasLastPlaybackCompleted'];
        }
        if (isset($map['HasReachedEndOfFlow'])) {
            $model->hasReachedEndOfFlow = $map['HasReachedEndOfFlow'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusName'])) {
            $model->statusName = $map['StatusName'];
        }
        if (isset($map['TagHits'])) {
            if (!empty($map['TagHits'])) {
                $model->tagHits = [];
                $n              = 0;
                foreach ($map['TagHits'] as $item) {
                    $model->tagHits[$n++] = null !== $item ? tagHits::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskEndReason'])) {
            $model->taskEndReason = $map['TaskEndReason'];
        }

        return $model;
    }
}
