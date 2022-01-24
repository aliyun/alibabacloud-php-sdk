<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SpeechFileTranscriberLite\V20211221\Models\GetTaskResultResponseBody\result;

use AlibabaCloud\Tea\Model;

class paragraphs extends Model
{
    /**
     * @var int
     */
    public $beginTIme;

    /**
     * @var int
     */
    public $channelId;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'beginTIme' => 'BeginTIme',
        'channelId' => 'ChannelId',
        'endTime'   => 'EndTime',
        'text'      => 'Text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTIme) {
            $res['BeginTIme'] = $this->beginTIme;
        }
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paragraphs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTIme'])) {
            $model->beginTIme = $map['BeginTIme'];
        }
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }

        return $model;
    }
}
