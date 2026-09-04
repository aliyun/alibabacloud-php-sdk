<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class ResumeCopilotTurnStreamRequest extends Model
{
    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var int[]
     */
    public $cursorByRun;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $traceId;

    /**
     * @var string
     */
    public $turnId;
    protected $_name = [
        'conversationId' => 'ConversationId',
        'cursorByRun' => 'CursorByRun',
        'lang' => 'Lang',
        'regionId' => 'RegionId',
        'traceId' => 'TraceId',
        'turnId' => 'TurnId',
    ];

    public function validate()
    {
        if (\is_array($this->cursorByRun)) {
            Model::validateArray($this->cursorByRun);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conversationId) {
            $res['ConversationId'] = $this->conversationId;
        }

        if (null !== $this->cursorByRun) {
            if (\is_array($this->cursorByRun)) {
                $res['CursorByRun'] = [];
                foreach ($this->cursorByRun as $key1 => $value1) {
                    $res['CursorByRun'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }

        if (null !== $this->turnId) {
            $res['TurnId'] = $this->turnId;
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
        if (isset($map['ConversationId'])) {
            $model->conversationId = $map['ConversationId'];
        }

        if (isset($map['CursorByRun'])) {
            if (!empty($map['CursorByRun'])) {
                $model->cursorByRun = [];
                foreach ($map['CursorByRun'] as $key1 => $value1) {
                    $model->cursorByRun[$key1] = $value1;
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }

        if (isset($map['TurnId'])) {
            $model->turnId = $map['TurnId'];
        }

        return $model;
    }
}
