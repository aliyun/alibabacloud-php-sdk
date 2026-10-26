<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\SendAgentConversationMessageRequest;

use AlibabaCloud\Dara\Model;

class attachments extends Model
{
    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $keptLines;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var string
     */
    public $sandboxPath;

    /**
     * @var int
     */
    public $sizeBytes;

    /**
     * @var string
     */
    public $timeRangeEnd;

    /**
     * @var string
     */
    public $timeRangeStart;

    /**
     * @var int
     */
    public $totalLines;
    protected $_name = [
        'fileName' => 'fileName',
        'keptLines' => 'keptLines',
        'kind' => 'kind',
        'sandboxPath' => 'sandboxPath',
        'sizeBytes' => 'sizeBytes',
        'timeRangeEnd' => 'timeRangeEnd',
        'timeRangeStart' => 'timeRangeStart',
        'totalLines' => 'totalLines',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->keptLines) {
            $res['keptLines'] = $this->keptLines;
        }

        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }

        if (null !== $this->sandboxPath) {
            $res['sandboxPath'] = $this->sandboxPath;
        }

        if (null !== $this->sizeBytes) {
            $res['sizeBytes'] = $this->sizeBytes;
        }

        if (null !== $this->timeRangeEnd) {
            $res['timeRangeEnd'] = $this->timeRangeEnd;
        }

        if (null !== $this->timeRangeStart) {
            $res['timeRangeStart'] = $this->timeRangeStart;
        }

        if (null !== $this->totalLines) {
            $res['totalLines'] = $this->totalLines;
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
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['keptLines'])) {
            $model->keptLines = $map['keptLines'];
        }

        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }

        if (isset($map['sandboxPath'])) {
            $model->sandboxPath = $map['sandboxPath'];
        }

        if (isset($map['sizeBytes'])) {
            $model->sizeBytes = $map['sizeBytes'];
        }

        if (isset($map['timeRangeEnd'])) {
            $model->timeRangeEnd = $map['timeRangeEnd'];
        }

        if (isset($map['timeRangeStart'])) {
            $model->timeRangeStart = $map['timeRangeStart'];
        }

        if (isset($map['totalLines'])) {
            $model->totalLines = $map['totalLines'];
        }

        return $model;
    }
}
