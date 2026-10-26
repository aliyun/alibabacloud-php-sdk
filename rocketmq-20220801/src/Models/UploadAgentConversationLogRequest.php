<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class UploadAgentConversationLogRequest extends Model
{
    /**
     * @var string
     */
    public $contentGzipB64;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $timeRangeEnd;

    /**
     * @var string
     */
    public $timeRangeStart;
    protected $_name = [
        'contentGzipB64' => 'contentGzipB64',
        'fileName' => 'fileName',
        'timeRangeEnd' => 'timeRangeEnd',
        'timeRangeStart' => 'timeRangeStart',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentGzipB64) {
            $res['contentGzipB64'] = $this->contentGzipB64;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->timeRangeEnd) {
            $res['timeRangeEnd'] = $this->timeRangeEnd;
        }

        if (null !== $this->timeRangeStart) {
            $res['timeRangeStart'] = $this->timeRangeStart;
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
        if (isset($map['contentGzipB64'])) {
            $model->contentGzipB64 = $map['contentGzipB64'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['timeRangeEnd'])) {
            $model->timeRangeEnd = $map['timeRangeEnd'];
        }

        if (isset($map['timeRangeStart'])) {
            $model->timeRangeStart = $map['timeRangeStart'];
        }

        return $model;
    }
}
