<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\QueryMinutesSummaryResponseBody\summary;

use AlibabaCloud\Dara\Model;

class conversationalSummary extends Model
{
    /**
     * @var string
     */
    public $speakerId;
    /**
     * @var string
     */
    public $speakerName;
    /**
     * @var string
     */
    public $summary;
    protected $_name = [
        'speakerId'   => 'SpeakerId',
        'speakerName' => 'SpeakerName',
        'summary'     => 'Summary',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->speakerId) {
            $res['SpeakerId'] = $this->speakerId;
        }

        if (null !== $this->speakerName) {
            $res['SpeakerName'] = $this->speakerName;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
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
        if (isset($map['SpeakerId'])) {
            $model->speakerId = $map['SpeakerId'];
        }

        if (isset($map['SpeakerName'])) {
            $model->speakerName = $map['SpeakerName'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        return $model;
    }
}
